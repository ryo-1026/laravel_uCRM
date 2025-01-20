
//Javascriptで改行させる
const nl2br = (str) => {
    let res = str.replace(/\r\n/g, "<br />");
    res = res.replace(/(\n|\r)/g, "<br />");
    return res;
};

//Javascriptで本日の日時を表示させる
const getToday = () => {
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = ("0" + (today.getMonth() + 1)).slice(-2);
    const dd = ("0" + today.getDate()).slice(-2);
    return yyyy + "-" + mm + "-" + dd;
};

export { nl2br, getToday }; //外でも使えるように
