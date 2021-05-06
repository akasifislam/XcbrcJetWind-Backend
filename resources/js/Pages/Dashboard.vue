<template>
  <app-layout>
    <template #header>
      <Breadcrumbs :items="breadcrumbs" />
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-8 overflow-hidden shadow-xl sm:rounded-lg">
          <p>The dashboard page content.The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard </p>
          
          <p class="mt-3"> page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content. The dashboard page content.  </p>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Breadcrumbs from "@/Components/Breadcrumbs";

export default {
  components: {
    AppLayout,
    Breadcrumbs,
  },

  computed: {
    breadcrumbs() {
      return [
        {
          label: "Dashboard",
        },
      ];
    },
  },
};
</script>
