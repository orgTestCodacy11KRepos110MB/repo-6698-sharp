<template>
    <div style="min-width: 4rem">
        <Dropdown class="SharpForm__locale-dropdown">
            <template v-slot:text>
                <template v-if="locale">{{ locale }}</template>
                <template v-else>-</template>
            </template>
            <template v-for="locale in locales">
                <DropdownItem class="text-uppercase small" :active="isActive(locale)" @click="handleChanged(locale)" :key="locale">
                    {{ locale }}
                </DropdownItem>
            </template>
        </Dropdown>
    </div>
</template>

<script>
    import { Dropdown, DropdownItem } from "sharp-ui";

    export default {
        components: {
            Dropdown,
            DropdownItem,
        },
        props: {
            locale: String,
            locales: Array,
        },
        methods: {
            handleChanged(locale) {
                this.$emit('change', locale);
            },
            isActive(locale) {
                return this.locale === locale;
            },
        },
    }
</script>
