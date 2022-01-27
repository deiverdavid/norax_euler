<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de usuarios
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px0">
                            <h3 class="text-lg text-gray-900">Detalle del usuario</h3>
                            <p class="text-lg text-black">{{ client.name }}</p>
                        </div>
                    </div>

                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bgwhite md:rounded-md p-4">
                            <label class="block font-medium text-md font-bold">Cédula</label>
                            <p class="text-indigo-700 font-semibold">{{ client.cedula }}</p>

                            <label class="block font-medium text-md font-bold">Nombre</label>
                            <p class="text-indigo-700 font-semibold">{{ client.name }}</p>

                            <label class="block font-medium text-md font-bold">Primer Apellido</label>
                            <p class="text-indigo-700 font-semibold">{{ client.lastname1 }}</p>

                            <label class="block font-medium text-md font-bold">Segundo Apellido</label>
                            <p class="text-indigo-700 font-semibold">{{ client.lastname2 }}</p>

                            <label class="block font-medium text-md font-bold">Telefono Celular</label>
                            <p class="text-indigo-700 font-semibold">{{ client.phone_number }}</p>

                            <label class="block font-medium text-md font-bold">Correo Electronico</label>
                            <p class="text-indigo-700 font-semibold">{{ client.email }}</p>

                            <label class="block font-medium text-md font-bold">Dirección</label>
                            <p class="text-indigo-700 font-semibold">{{ client.address }}</p>

                            <label class="block font-medium text-md font-bold">Cargo</label>
                            <p class="text-indigo-700 font-semibold">{{ client.position }}</p>

                            <label class="block font-medium text-md font-bold">Descripción del Cargo</label>
                            <p class="text-indigo-700 font-semibold">{{ client.description_position }}</p>
                            <hr class="my-6">

                            <Link :href="route('clients.index')">
                                Volver
                            </Link>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3'
    

    export default defineComponent({
        components: {
            AppLayout,
            Head,
            Link,
        },
        props: {
            client: Object,
        }
    })
</script>