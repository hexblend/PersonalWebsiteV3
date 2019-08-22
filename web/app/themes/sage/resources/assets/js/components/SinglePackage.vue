<template>
    <div class="single-package">
        <div class="single-package__heading">
            <h3 class="single-package__heading--title">{{ spackage.title }}</h3>
            <p class="single-package__heading--description">{{ spackage.subtitle }}</p>
        </div>
        <div class="single-package__description">
            <div class="single-package__description--column1">
                <h5 class="single-package__description--column1-title">{{ spackage.description_title }}</h5>
                <div v-html="spackage.description_column_1">
                    {{ spackage.description_column_1 }}
                </div>
            </div>
            <div class="single-package__description--column2" v-if="spackage.description_column_2">
                <div v-html="spackage.description_column_2">
                    {{ spackage.description_column_2 }}
                </div>
            </div>
        </div>
        <a href="#about" class="single-package__button btn btn-filled">{{ spackage.button_text }}</a>
    </div>
</template>

<script>
    export default {
        name: 'single-package',
        props: {
            spackage: Object
        },
    }
</script>
