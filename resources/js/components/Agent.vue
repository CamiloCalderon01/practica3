<template>
    <div class="text-center mt-3">
        <table class="table table-bordered table-striped table-hover w-75 m-auto mt-3">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Working Area</th>
                    <th>Comission</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="agent in agents.data" :key="agent.agent_code">
                    <td>{{ agent.agent_code }}</td>
                    <td>{{ agent.agent_name }}</td>
                    <td>{{ agent.working_area }}</td>
                    <td>{{ agent.comission }}</td>
                </tr>
            </tbody>
        </table>

        <pagination align="center" :data="agents" @pagination-change-page="mostrarAgentes"/>
    </div>
</template>

<script>
import pagination from 'laravel-vue-pagination';
export default {
    name: "agents",
    components: {
        pagination
    },
    data() {
        return {
            agents: []
        }
    },
    mounted() {
        this.mostrarAgentes()
    },
    methods: {
        async mostrarAgentes(page = 1) {
            await axios.get('/api/agent?page=' + page)
                .then(response => {
                    this.agents = response.data;
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                    this.agents = [];
                })
        }
    }
}
</script>