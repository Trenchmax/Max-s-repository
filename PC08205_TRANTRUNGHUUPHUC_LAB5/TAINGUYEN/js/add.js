let dataList = data;
function add() {
  let obj = {
    id: dataList.length + 1,
    concept: document.getElementById("concept").value,
    "image-podcast": document.getElementById("podcast").value.split("\\")[2],
    "image-profile": document.getElementById("profile").value,
    artist: document.getElementById("artist").value,
    job: document.getElementById("job").value,
    describe: document.getElementById("headphones").value,
    headphones: document.getElementById("headphones").value,
    heart: document.getElementById("heart").value,
    chat: document.getElementById("chat").value,
  };
  console.log(obj);
  dataList.push(obj);
  console.log(dataList);
}
