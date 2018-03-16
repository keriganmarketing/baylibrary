<template>
    <div class="photo-gallery">
        <div class="columns is-multiline" >
            <div class="column is-6 is-4-desktop" v-for="photo in photos" >
                <div class="photo-tile has-text-centered" @click="toggleGallery(photo)">
                    <figure class="image is-3by2 hide-overflow">
                        <img :id="photo.slug" :src="photo.url" :alt="photo.name" >
                    </figure>
                    <p>{{ photo.name }}</p>
                </div>
            </div>
        </div>
        <hr>
    </div>
</template>

<script>
    export default {
        props: {
            photos: {
                type: Array,
                default: () => []
            }
        },
        methods: {
            toggleGallery( photo ){
                this.$parent.$emit('toggleModal','photoModal','<img id="' + photo.slug + '" src="' + photo.url + '" alt="' + photo.name + '" >');
            }
        }
    }
</script>

<style scoped>
    .photo-gallery {
        padding: 2rem 0;
    }
    .photo-tile {
        margin-bottom: 1rem;
    }
</style>