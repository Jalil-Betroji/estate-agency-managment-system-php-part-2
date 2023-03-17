const setting_btn = document.getElementById("setting");
const my_announce_btn = document.getElementById("my_announce");

const profile_homePage_section = document.getElementById("full_Announces_List");
const Profile_section = document.getElementById("Profile");

setting_btn.addEventListener("click", () => {
  Profile_section.classList.remove("profile_hide");
  profile_homePage_section.classList.add("profile_hide");
});

my_announce_btn.addEventListener("click", (e) => {
  e.preventDefault();
  Profile_section.classList.add("profile_hide");
  profile_homePage_section.classList.remove("profile_hide");
});

const title_Validation = document.getElementById("add_Title");
const rooms_Validation = document.getElementById("Rooms");
const price_Validation = document.getElementById("Price");
const country_Validation = document.getElementById("Country");
const city_Validation = document.getElementById("City");
const category_Validation = document.getElementById("Category");
const type_Validation = document.getElementById("Type");
const area_Validation = document.getElementById("Area");
const house_Number_Validation = document.getElementById("House_number");
const house_Floor_Validation = document.getElementById("House_floor");
const code_Postal_Validation = document.getElementById("Code_postal");
const bathrooms_Validation = document.getElementById("Bathrooms");

let validation_Arr = [];

title_Validation.addEventListener("blur", () => {
  if (title_Validation.value.length === 0) {
    document.getElementById("title_error").innerHTML = "Required field";
    title_Validation.style.border = "solid 2px red";
    title_Validation.style.color = "red";
  } else {
    document.getElementById("title_error").innerHTML = "";
    title_Validation.style.border = "solid 2px #26c820";
    title_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== rooms input validation ======

rooms_Validation.addEventListener("blur", () => {
  if (rooms_Validation.value.length === 0) {
    document.getElementById("rooms_error").innerHTML = "Required field";
    rooms_Validation.style.border = "solid 2px red";
    rooms_Validation.style.color = "red";
  } else {
    document.getElementById("rooms_error").innerHTML = "";
    rooms_Validation.style.border = "solid 2px #26c820";
    rooms_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== price input validation ======

price_Validation.addEventListener("blur", () => {
  if (price_Validation.value.length === 0) {
    document.getElementById("price_error").innerHTML = "Required field";
    price_Validation.style.border = "solid 2px red";
    price_Validation.style.color = "red";
  } else {
    document.getElementById("price_error").innerHTML = "";
    price_Validation.style.border = "solid 2px #26c820";
    price_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== country input validation =====

country_Validation.addEventListener("blur", () => {
  if (country_Validation.value === "Country") {
    document.getElementById("country_error").innerHTML = "Required field";
    country_Validation.style.border = "solid 2px red";
    country_Validation.style.color = "red";
  } else {
    document.getElementById("country_error").innerHTML = "";
    country_Validation.style.border = "solid 2px #26c820";
    country_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== city input validation ======

city_Validation.addEventListener("blur", () => {
  if (city_Validation.value === "City") {
    document.getElementById("city_error").innerHTML = "Required field";
    city_Validation.style.border = "solid 2px red";
    city_Validation.style.color = "red";
  } else {
    document.getElementById("city_error").innerHTML = "";
    city_Validation.style.border = "solid 2px #26c820";
    city_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== category input validation ======

category_Validation.addEventListener("blur", () => {
  if (category_Validation.value === "- Select Category -") {
    document.getElementById("category_error").innerHTML = "Required field";
    category_Validation.style.border = "solid 2px red";
    category_Validation.style.color = "red";
  } else {
    document.getElementById("category_error").innerHTML = "";
    category_Validation.style.border = "solid 2px #26c820";
    category_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});
// ====== type input validation ======

type_Validation.addEventListener("blur", () => {
  if (type_Validation.value === "Type") {
    document.getElementById("type_error").innerHTML = "Required field";
    type_Validation.style.border = "solid 2px red";
    type_Validation.style.color = "red";
  } else {
    document.getElementById("type_error").innerHTML = "";
    type_Validation.style.border = "solid 2px #26c820";
    type_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== area input validation ======

area_Validation.addEventListener("blur", () => {
  if (area_Validation.value.length === 0) {
    document.getElementById("area_error").innerHTML = "Required field";
    area_Validation.style.border = "solid 2px red";
    area_Validation.style.color = "red";
  } else {
    document.getElementById("area_error").innerHTML = "";
    area_Validation.style.border = "solid 2px #26c820";
    area_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== house number input validation ======

house_Number_Validation.addEventListener("blur", () => {
  if (house_Number_Validation.value.length === 0) {
    document.getElementById("houseNumber_error").innerHTML = "Required field";
    house_Number_Validation.style.border = "solid 2px red";
    house_Number_Validation.style.color = "red";
  } else {
    document.getElementById("houseNumber_error").innerHTML = "";
    house_Number_Validation.style.border = "solid 2px #26c820";
    house_Number_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== house floor input validation ======

house_Floor_Validation.addEventListener("blur", () => {
  if (house_Floor_Validation.value.length === 0) {
    document.getElementById("houseFloor_error").innerHTML = "Required field";
    house_Floor_Validation.style.border = "solid 2px red";
    house_Floor_Validation.style.color = "red";
  } else {
    document.getElementById("houseFloor_error").innerHTML = "";
    house_Floor_Validation.style.border = "solid 2px #26c820";
    house_Floor_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== code_Postal input validation ======

code_Postal_Validation.addEventListener("blur", () => {
  if (code_Postal_Validation.value.length === 0) {
    document.getElementById("codePostal_error").innerHTML = "Required field";
    code_Postal_Validation.style.border = "solid 2px red";
    code_Postal_Validation.style.color = "red";
  } else {
    document.getElementById("codePostal_error").innerHTML = "";
    code_Postal_Validation.style.border = "solid 2px #26c820";
    code_Postal_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

// ====== code_Postal input validation ======

bathrooms_Validation.addEventListener("blur", () => {
  if (bathrooms_Validation.value.length === 0) {
    document.getElementById("bathroom_error").innerHTML = "Required field";
    bathrooms_Validation.style.border = "solid 2px red";
    bathrooms_Validation.style.color = "red";
  } else {
    document.getElementById("bathroom_error").innerHTML = "";
    bathrooms_Validation.style.border = "solid 2px #26c820";
    bathrooms_Validation.style.color = "black";
    validation_Arr.push(true);
  }
});

const xhttp = new XMLHttpRequest();

dataEdite = [];
function get_Details(Announce_ID) {
  console.log(Announce_ID);
  document.getElementById("announce_id").value = Announce_ID;
  document.getElementById("announce_id").setAttribute("value", Announce_ID);

  xhttp.open("GET", "detailJson.php?Announce_Info=" + Announce_ID, true);
  xhttp.send();

  // Define a callback function
  xhttp.onload = function () {
    console.log(xhttp.response);
    if (this.readyState == 4 && this.status == 200) {
      dataEdite = JSON.parse(this.response);
      console.log(dataEdite);

      let images = "";
      for (i = 0; i < dataEdite["Image_Paths"].length; i++) {
        images += `<img src="img/${dataEdite["Image_Paths"][i]}" style="width:20rem;height:15rem;"alt="announce images" id="announces_Image" class="px-3">`;
      }
      document.getElementById("announces_Images").innerHTML = images;
      console.log(images);
      document.getElementById("title").value = dataEdite.Title;
      document.getElementById("rooms").value = dataEdite.Rooms;
      document.getElementById("price").value = dataEdite.Price;
      document.getElementById("city").value = dataEdite.City;
      document.getElementById("house_number").value = dataEdite.House_Number;
      document.getElementById("category").value = dataEdite.Category;
      document.getElementById("area").value = dataEdite.Area;
      document.getElementById("bathrooms").value = dataEdite.Bathrooms;
      document.getElementById("country").value = dataEdite.Country;
      document.getElementById("code_postal").value = dataEdite.Code_Postal;
      document.getElementById("house_floor").value = dataEdite.House_Floor;
      document.getElementById("type").value = dataEdite.Type;
    }
  };
}

announce_data = [];
function getMore_Details(Announce_ID) {
  xhttp.open("GET", "detailJson.php?More_Info=" + Announce_ID, true);
  xhttp.send();

  // Define a callback function
  xhttp.onload = function () {
    if (this.readyState == 4 && this.status == 200) {
      announce_data = JSON.parse(this.response);
      console.log(announce_data);

      document.getElementById(
        "announces_Image"
      ).src = `img/${announce_data.Image_Path}`;
      document.getElementById("announce_Title").value = announce_data.Title;
      document.getElementById("announce_Rooms").value = announce_data.Rooms;
      document.getElementById("announce_Price").value = announce_data.Price;
      document.getElementById("announce_City").value = announce_data.City;
      document.getElementById("announce_House_Number").value =
        announce_data.House_Number;
      document.getElementById("announce_Category").value =
        announce_data.Category;
      document.getElementById("announce_Area").value = announce_data.Area;
      document.getElementById("announce_Bathrooms").value =
        announce_data.Bathrooms;
      document.getElementById("announce_Country").value = announce_data.Country;
      document.getElementById("announce_Postal").value =
        announce_data.Code_Postal;
      document.getElementById("announce_House_Floor").value =
        announce_data.House_Floor;
      document.getElementById("announce_Type").value = announce_data.Type;
    }
  };
}

function delete_Announce(Announce_ID) {
  xhttp.open("GET", "detailJson.php?delete_announce=" + Announce_ID, true);
  xhttp.send();

  xhttp.onload = function () {
    if (this.readyState == 4 && this.status == 200) {
      annoounce_Data = JSON.parse(this.response);
      console.log(annoounce_Data);

      document.getElementById("delete_id").value = annoounce_Data.Announce_ID;
    }
  };
}
