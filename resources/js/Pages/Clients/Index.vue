<template>
    <app-layout title="Dashboard">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de usuarios
            </h1>
        </template>

        <div class="py-12 m-auto ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class="container bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="container m-auto px-4 sm:px0  bg-gray-500 flex flex-col items-center">
                            <h2 class="text-lg text-white">Listado de usuarios</h2>
                            <p class="text-sm text-gray-600 text-white">Toma el registro correcto y ejecuta cualquier función (ver, editar o eliminar)</p>
                    </div>

                    <div class="container ml-2 mt-4">
                            <input type="text" class="form-input rounded-md shadow-sm" placeholder="Buscar..." v-model="q">

                            <Link :href="route('clients.create')" class="m-2 p-2 bg-blue-500 my-1 mt-1 rounded-md text-white">
                               Nuevo +
                            </Link>
                    </div>

                    <div class="md:col-span-2 mt-5 md:mt-0 ">
                        <div class="shadow bg-white md:rounded-md p-4 flex flex-col items-center justify-between ">
                            <table class="table-auto w-full ">
                                <thead>
                                    <tr class="bg-green-400 text-white ">
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Célular</th>
                                        <th>Correo</th>
                                        <th>Dirrección</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody >

                                    <tr v-for="client in clients" :key="client.id" >
                                    <td class="border px-4 py-2">
                                        {{ client.name }}
                                    </td>
                                    <td class="border px-4 py-2">
                                       {{ client.lastname1 }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ client.phone_number }}
                                    </td>
                                    <td class="border px-4 py-2">
                                       {{ client.email }}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ client.address }}
                                    </td>
                                    <td class="px-4 py-2 ">
                                        <jet-button class="m-2 p-2 bg-green-500 my-1 mt-1 rounded-md flex self-center text-white text-center" >
                                          <Link :href="route('clients.show', client.id)">
                                            Mostrar
                                          </Link>
                                        </jet-button>

                                        <jet-button class="m-2 p-2 bg-orange-500 my-1 mt-1 rounded-md flex self-center text-white text-center" >
                                            <Link :href="route('clients.edit', client.id)">
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
            clients: Array,
        },
        data() {
            return {
                q: ''
            }
        },
        watch: {
            q: function (value) {
                this.$inertia.get(this.route('clients.index', {q: value}), {}, {preserveState:true})
            }
        }
    })
</script>

