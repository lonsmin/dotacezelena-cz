<template>
    <div class="prevent-select">
        {{}}
        <Multiselect
            v-model="selectedServices"
            mode="tags"
            placeholder="Vyberte jednu nebo více dotací"
            trackBy="name"
            label="name"
            :search="true"
            class="prevent-select"
            :options="optionsArray()"
            @change="updateValue"
        >
            <template v-slot:tag="{ option, handleTagRemove, disabled }">
                <div class="multiselect-tag is-user prevent-select">
                    {{ option.name }}
                    <div
                        class="prevent-select"
                        v-if="!disabled"
                        @click.prevent
                        @mousedown.prevent.stop="handleTagRemove(option, $event)"
                    >
                        &nbsp;X&nbsp;
                    </div>
                </div>
            </template>
        </Multiselect>
    </div>
</template>

<script>
import Multiselect from "@vueform/multiselect";

export default {
    props: {
        services: Array,
    },
    // https://bestofvue.com/repo/vueform-multiselect-vuejs-form-select
    components: {
        Multiselect,
    },
    methods: {
        optionsArray() {
            return this.services.map((service, index) => {
                const container = {};
                container["name"] = service.name;
                container["value"] = index;
                return container;
            });
        },
        updateValue(event) {
            this.$emit("selected-services", event);
        },
    },

    data() {
        return {
            selectedServices: [],
        };
    },
};
</script>

<style src="@vueform/multiselect/themes/default.css">
.multiselect-tag {
    margin-right: 1em;
    background: #28a745;
}
.close-btn {
    padding: 10px;
    content: "X";
}

.prevent-select {
    -webkit-user-select: none; /* Safari */
    -ms-user-select: none; /* IE 10 and IE 11 */
    user-select: none; /* Standard syntax */
}
</style>
