<template>
<span v-text="fieldValue"></span>
</template>

<script>


export default {

    props: ['resourceName', 'field'],

    computed: {
        fieldValue() {
            return this.field.displayedAs || this.field.value
        },
        target() {
            if(this.field.target){
                return this.field.target;
            }

            return '_self';
        },
        defaultClasses(){
            return 'flex-shrink-0 shadow rounded focus:outline-none ring-primary-200 dark:ring-gray-600 focus:ring bg-primary-500 hover:bg-primary-400 active:bg-primary-600 text-white dark:text-gray-800 inline-flex items-center font-bold px-4 h-5 text-sm';
        }
    },
    methods: {
        goTo(e){
            console.log('Toooo')
            e.preventDefault();
        }
    }
}
</script>
