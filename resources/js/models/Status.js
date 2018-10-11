class Status {
    static all(then) {
        console.log(then);
        return axios.get('/statuses')
                .then(response => then(response.data));
    }
}

export default Status;