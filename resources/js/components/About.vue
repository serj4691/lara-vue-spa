<template>

    <div>
        <gallery :images="images" :index="index" @close="index = null"></gallery>
        <div
            class="image"
            v-for="(image, imageIndex) in images"
            :key="imageIndex"
            @click="index = imageIndex"
            :style="{ backgroundImage: 'url(' + image + ')', width: '150px', height: '150px' }"
        ></div>
    </div>
</template>

<script>
    import VueGallery from 'vue-gallery';

    export default {
        name: "Gallery",
        data() {
            return {
                images: [],
                index: null,
            }
        },

        components: {
            'gallery': VueGallery
        },
        methods: {
            setImages() {
                for(let i=1;i<39;i++){
                   this.images.push('/assets/img/' + i + '.jpg')
                }
            }
        },
        mounted() {
            this.setImages()
        }
    }
</script>

<style scoped>
    .image {
        float: left;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        border: 1px solid #ebebeb;
        margin: 5px;
    }
</style>
