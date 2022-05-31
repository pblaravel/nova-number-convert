<template>
    <PanelItem :index="index" :field="field">
        <template #value>
            <span v-if="field.division !== 0">{{ parseFloat(field.value / field.division).toFixed(field.precision) }}</span>
            <span v-if="field.division === 0">{{ parseFloat(field.value).toFixed(field.precision) }}</span>
        </template>
    </PanelItem>
</template>

<script>
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
}
</script>
