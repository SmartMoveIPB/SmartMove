<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>
        <v-main class="pa-10 ">
            <v-contaienr >
                <!-- Foto -->
                <v-card :style="cardStyle" style="opacity: 0.5;"></v-card>
                
                <!-- Button bus or Train -->
                <div id="bus"  class="d-flex mx-auto rounded-pill my-10 " style="width: 250px; height: 50px; background-color: white;">
                    <button  onclick="location.href='/'" style="width: 125px; height: 50px; background-color: #E8DEF8;" class="rounded-ts-pill pa-3 rounded-bs-pill border">
                        <h4  class="text-black text-center ">Bus</h4>
                    </button>  
                    <button id="train" onclick="location.href='/train'" style="width: 125px; height: 50px; background-color: white;" class="rounded-te-pill pa-3 rounded-be-pill border">
                        <h4  class="text-black text-center ">Train</h4>
                    </button>
                </div>
                
                <!-- Isi bus -->
                <section class="border">
                    <v-list :style="listStyle" :items="items" class="pa-2" lines="three" items-props>
                    </v-list>
                    
                </section>
            </v-contaienr>
        </v-main>
        <v-col cols="auto">
            <v-btn size="x-large">X-Large Button</v-btn>
        </v-col>
    </AuthenticatedLayout>
</template>

<script>
items : [ // props itu untuk nambahkan property kayak icon dsb
                    {
                        prependAvatar : 'https://th.bing.com/th/id/OIP.0knG318bl0K7VkNsNTxtqQHaEf?w=274&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                        title : 'Bus Sinar Jaya',
                        value : '1',
                        props :{
                            appendIcon : 'mdi-heart-outline'
                        }
                    },
                    {type : 'divider', inset : true},
                    {
                        title : 'Bus Sinar Jaya',
                        value : '2',
                        props :{
                            appendIcon : 'mdi-heart-outline'
                        }
                    },
                    {type : 'divider', inset : true},
                    {
                        title : 'Bus Sinar Jaya',
                        subtitle :'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium reiciendis doloremque assumenda commodi eos ratione magni aut animi laudantium autem?',
                        value : '3',
                        props :{
                            appendIcon : 'mdi-heart-outline'
                        }
                    },
                    {type : 'divider', inset : true},
                    {
                        title : 'Bus Sinar Jaya',
                        subtitle :'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium reiciendis doloremque assumenda commodi eos ratione magni aut animi laudantium autem?',
                        value : '3',
                        props :{
                            appendIcon : 'mdi-heart-outline'
                        }
                    },
                    {type : 'divider', inset : true},
                    {
                        title : 'Bus Sinar Jaya',
                        subtitle :'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium reiciendis doloremque assumenda commodi eos ratione magni aut animi laudantium autem?',
                        value : '3',
                        props :{
                            appendIcon : 'mdi-heart-outline'
                        }
                    }
                    ,
                    {type : 'divider', inset : true},
                    {
                        title : 'Bus Sinar Jaya',
                        subtitle :'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium reiciendis doloremque assumenda commodi eos ratione magni aut animi laudantium autem?',
                        value : '3',
                        props :{
                            appendIcon : 'mdi-heart-outline'
                        }
                    },
                    {type : 'divider', inset : true},
                    {
                        title : 'Bus Sinar Jaya',
                        subtitle :'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium reiciendis doloremque assumenda commodi eos ratione magni aut animi laudantium autem?',
                        value : '3',
                        props :{
                            appendIcon : 'mdi-heart-outline'
                        }
                    }
                ]
</script>