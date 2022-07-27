<template>
    <PanelItem :index="index" :field="field">
        <template v-slot:value>
            <a :class="classes" v-text="label" :target="target" :href="url"></a>
        </template>
    </PanelItem>
</template>

<script>
export default {
    props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
    computed: {
        classes() {
            if (this.field.classes) {
                return this.field.classes;
            }

            return 'flex-shrink-0 shadow rounded focus:outline-none ring-primary-200 dark:ring-gray-600 focus:ring bg-primary-500 hover:bg-primary-400 active:bg-primary-600 text-white dark:text-gray-800 inline-flex items-center font-bold px-4 h-5 text-sm flex-shrink-0';
        },
        url() {
            return this.field.value;
        },
        label() {
            if (this.field.label) {
                return this.field.label
            }
            return this.field.label;
        },
        target() {
            if (this.field.target) {
                return this.field.target;
            }

            return '_blank'
        }
    }
}
</script>
