<template>
    <div class="text-center mt-3">
        <table class="table table-bordered table-striped table-hover w-75 m-auto mt-3">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Amount</th>
                    <th>Adv Amount</th>
                    <th>Date</th>
                    <th>Customer Name</th>
                    <th>Customer City</th>
                    <th>Agent Info</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="order in orders.data" :key="order.agent_code">
                    <td>{{ order.ord_num }}</td>
                    <td>{{ order.ord_amount }}</td>
                    <td>{{ order.advance_amount }}</td>
                    <td>{{ order.ord_date }}</td>
                    <td>{{ order.cust_name }}</td>
                    <td>{{ order.cust_city }}</td>
                    <td>{{ order.agent_info }}</td>
                </tr>
            </tbody>
        </table>

        <pagination align="center" :data="orders" @pagination-change-page="mostrarOrders"/>
    </div>
</template>

<script>
import pagination from 'laravel-vue-pagination';
export default {
    name: "orders",
    components: {
        pagination
    },
    data() {
        return {
            orders: []
        }
    },
    mounted() {
        this.mostrarOrders()
    },
    methods: {
        async mostrarOrders(page = 1) {
            await axios.get('/api/order?page=' + page)
                .then(response => {
                    this.orders = response.data;
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                    this.orders = [];
                })
        }
    }
}
</script>