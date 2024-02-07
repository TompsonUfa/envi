import FormView from "@/views/FormView.vue";
import FormListView from "@/views/FormListView.vue";

const routes = [
    {
        path: '/',
        name: 'form',
        component: FormView,
    },
    {
        path: '/form-list',
        name: 'form-list',
        component: FormListView,
    }
]

export default routes;
