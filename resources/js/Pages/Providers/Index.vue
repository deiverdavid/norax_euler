<template>
    <app-layout title="Dashboard">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de proveedores
            </h1>
        </template>

        <div class="py-12 m-auto ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class="container bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="container m-auto px-4 sm:px0  bg-gray-500 flex flex-col items-center">
                            <h2 class="text-lg text-white">Listado de proveedores</h2>
                            <p class="text-sm text-gray-600 text-white">Toma el registro correcto y ejecuta cualquier función (ver, editar o eliminar)</p>
                    </div>

                    <div class="container ml-2 mt-4">
                            <input type="text" class="form-input rounded-md shadow-sm" placeholder="Buscar..." v-model="q">

                            <Link :href="route('providers.create')" class="m-2 p-2 bg-blue-500 my-1 mt-1 rounded-md text-white">
                               Nuevo +
                            </Link>
                    </div>

                    <div class="md:col-span-2 mt-5 md:mt-0 ">
                        <div class="shadow bg-white md:rounded-md p-4 flex flex-col items-center justify-between ">
                            <table class="table-auto w-full ">
                                <thead>
                                    <tr class="bg-green-400 text-white ">
                                        <th>Nit</th>
                                        <th>Cédula</th>
                                        <th>Razon social</th>
                                        <th>Lugar del negocio</th>
                                        <th>Nombre</th>
                                        <!--<th>Primer apellido</th>
                                        <th>Segundo apellido</th>
                                        <th>Dirección</th>
                                        <th>Telefono 1</th>
                                        <th>Telefono 2</th>
                                        <th>Fax</th>
                                        <th>Correo</th>-->
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody >

                                    <tr v-for="provider in providers" :key="provider.id">
                                    <td class="border px-4 py-2">
                                        {{ provider.nit }}
                                    </td>
                                    <td class="border px-4 py-2">
                                       {{ provider.cedula }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ provider.business_name }}
                                    </td>
                                    <td class="border px-4 py-2">
                                       {{ provider.property_name }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ provider.name }}
                                    </td>
                                   <!-- <td class="border px-4 py-2">
                                        {{ provider.lastname1 }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ provider.lastname2 }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ provider.address }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ provider.phone_number1 }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ provider.phone_number2 }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ provider.fax }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ provider.email }} 
                                    </td>-->
                                    <td class="px-4 py-2 ">
                                        <jet-button class="m-2 p-2 bg-green-500 my-1 mt-1 rounded-md flex self-center text-white text-center" >
                                          <Link :href="route('providers.show', provider.id)">
                                            Mostrar
                                          </Link>
                                        </jet-button>

                                        <jet-button class="m-2 p-2 bg-orange-500 my-1 mt-1 rounded-md flex self-center text-white text-center" >
                                            <Link :href="route('providers.edit', provider.id)">
                                                Editar
                                            </Link>
                                        </jet-button>
                                        
                                    </td>

                                </tr>
                                </tbody>
                                
                            </table>
                          
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
            providers: Array,
        },
        data() {
            return {
                q: ''
            }
        },
        watch: {
            q: function (value) {
                this.$inertia.get(this.route('providers.index', {q: value}), {}, {preserveState:true})
            }
        }
    })
</script>

