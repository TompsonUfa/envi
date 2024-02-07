export default {
    actions: {
        saveMessage(ctx, message){
            ctx.commit('updateMessages', message);
        },
    },
    mutations: {
        updateMessages(state, message){
            state.messages.push(message);
        }
    },
    state: {
        messages: [],
    },
    getters: {
        messages(state){
            return state.messages;
        }
    },
}
