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
                            <h3 class="text-lg text-gray-900">Detalle del proveedor</h3>
                            <p class="text-xl font-bold">{{ provider.name }}</p>
                        </div>
                    </div>

                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bgwhite md:rounded-md p-4">

                            
                            <label class="block font-medium text-md font-bold">Nit</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.nit }}</p>


                            <label class="block font-medium text-md font-bold">Cédula</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.cedula }}</p>

                            <label class="block font-medium text-md font-bold">Razón social</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.business_name }}</p>

                            <label class="block font-medium text-md font-bold">Nombre del establecimiento</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.property_name }}</p>

                            <label class="block font-medium text-md font-bold">Nombre del encargado</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.name }}</p>

                            <label class="block font-medium text-md font-bold">Primer apellido</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.lastname1 }}</p>

                            <label class="block font-medium text-md font-bold">Segundo Apellido</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.lastname2 }}</p>

                            <label class="block font-medium text-md font-bold">Dirección</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.address }}</p>

                            <label class="block font-medium text-md font-bold">Telefono Celular(primer contacto)</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.phone_number1 }}</p>

                            <label class="block font-medium text-md font-bold">Telefono Celular(segundo contacto)</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.phone_number2 }}</p>

                            <label class="block font-medium text-md font-bold">Telefono Celular(segundo contacto)</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.fax }}</p>

                            <label class="block font-medium text-md font-bold">Correo Electronico</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.email }}</p>

                            <label class="block font-medium text-md font-bold">Dirección</label>
                            <p class="text-indigo-700 font-semibold">{{ provider.address }}</p>

                            
                            <hr class="my-6">

                            <Link :href="route('providers.index')">
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
            provider: Object,
        }
    })
</script>