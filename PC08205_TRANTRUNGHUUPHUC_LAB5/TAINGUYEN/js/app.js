console.log(data);

let dataList = data;
let html = "";

function showData() {
  dataList.forEach((item) => {
    html += `
    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
    <div class="custom-block custom-block-full">
      <div class="custom-block-image-wrap">
        <a href="detail-page.html">
          <img
            src="images/podcast/${item["image-podcast"]}"
            class="custom-block-image img-fluid"
            alt=""
          />
        </a>
      </div>

      <div class="custom-block-info">
        <h5 class="mb-2">
          <a href="detail-page.html"> ${item.concept}</a>
        </h5>

        <div class="profile-block d-flex">
          <img
            src="images/profile/${item["image-profile"]}"
            class="profile-block-image img-fluid"
            alt=""
          />

          <p>
            ${item.artist}
            <strong>${item.job}</strong>
          </p>
        </div>

        <p class="mb-0">${item.describe}</p>

        <div
          class="custom-block-bottom d-flex justify-content-between mt-3"
        >
          <a href="#" class="bi-headphones me-1">
            <span>${item.headphones}</span>
          </a>

          <a href="#" class="bi-heart me-1">
            <span>${item.heart}</span>
          </a>

          <a href="#" class="bi-chat me-1">
            <span>${item.chat}</span>
          </a>
        </div>
      </div>
      <div class="social-share d-flex flex-column ms-auto">
        <a href="#" class="badge ms-auto">
          <i class="bi-pencil"></i>
        </a>

        <a href="#" class="badge ms-auto">
          <i onclick = "deleted(${item.id})" class="bi-trash"></i>
        </a>
      </div>
    </div>
  </div>
    `;
  });
  document.getElementById("dataList").innerHTML = html;
}
showData();

//Xóa phần tử mảng
function deleted(id) {
  if (confirm("Bạn có chắc chắn muốn xóa file?")) {
    html = ``;
    dataList = dataList.filter((item) => item.id !== id);
    showData();
  }
}
