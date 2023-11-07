<template>
  <div>

    <Head title="Telescope" />
    <Card class="flex flex-col items-center justify-center">
      <iframe :src="this.telescope" class="w-full aspect-auto" frameborder="0" scrolling="auto"></iframe>
    </Card>
  </div>
</template>

<script>
export default {

  data() {
    return {
      telescope: Nova.config('tool').telescope,
    }
  },

}
</script>


<style>
iframe {
  height: 90vh;
}
</style>