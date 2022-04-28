<template>
    <div class="text-center mt-3">
        <table class="table table-bordered table-striped table-hover w-75 m-auto mt-3">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Working Area</th>
                    <th>Agent Info</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="customer in customers.data" :key="customer.agent_code">
                    <td>{{ customer.cust_code }}</td>
                    <td>{{ customer.cust_name }}</td>
                    <td>{{ customer.cust_city }}</td>
                    <td>{{ customer.working_area }}</td>
                    <td>{{ customer.agent_info }}</td>
                </tr>
            </tbody>
        </table>

        <pagination align="center" :data="customers" @pagination-change-page="mostrarCustomers"/>
    </div>
</template>

<script>
import pagination from 'laravel-vue-pagination';
export default {
    name: "customers",
    components: {
        pagination
    },
    data() {
        return {
            customers: []
        }
    },
    mounted() {
        this.mostrarCustomers()
    },
    methods: {
        async mostrarCustomers(page = 1) {
            await axios.get('/api/customer?page=' + page)
                .then(response => {
                    this.customers = response.data;
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                    this.customers = [];
                })
        }
    }
}
</script>