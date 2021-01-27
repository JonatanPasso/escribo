import TesteEscribo from "./components/TesteEscribo";
import home from "./components/home";

export default [
    {
        path: '/inteiro',
        component: TesteEscribo,
        meta: {
            title: '1º Teste Escribo'
        }
    },
    {
        path: '/',
        component: home,
        meta: {
            title: 'Home'
        },
    }
]

