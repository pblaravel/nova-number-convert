<template>
    <span v-if="field.division !== 0">{{ parseFloat(field.value / field.division).toFixed(field.precision) }}</span>
    <span v-if="field.division === 0">{{ parseFloat(field.value).toFixed(field.precision) }}</span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
