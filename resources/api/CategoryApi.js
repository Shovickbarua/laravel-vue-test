const CategoryApi = () => {};

CategoryApi.index = async () => {
    const url = 'api/category/';
    const res = await axios.get(url)
        .then((response) => {
            return response.data;
        })
        .catch((error) => {
            return error;
        });
    return res;
};

export default CategoryApi;
