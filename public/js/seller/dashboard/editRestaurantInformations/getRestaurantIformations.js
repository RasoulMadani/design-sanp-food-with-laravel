// in the name of allah
function getRestaurantIformations(event) {
    let id = event.dataset.gsId;
    // let token = document.querySelector('meta[name="csrf-token"]').content;
    let xhr = new XMLHttpRequest();

    // Open the connection
    xhr.open("GET", `/seller/dashboard/edit-restaurant-information?id=${id}`);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //* Set up a handler for when the task for the request is complete
    xhr.onload = function () {
        let response = JSON.parse(this.response);
        // console.log(this.response);
        // return;
        if (this.status == 403 && response.status == "forbidden") {
            alert("این رستوران برای شما نیست ");
            return;
        }
        let htmlEntities = "";
        if (response.allah == "perform") {
            htmlEntities += `<div id="messageLoginRestaurantInformation">
            </div>
            <div class="row">
                <div class="col-lg-6 mb-2">
                    <div class="form-group">
                        <label class="text-label"> نام رستوران *</label>
                        <input type="text" name="restaurantName"
                            onkeyup="restaurantNameValidation(this)"
                            class="form-control" value="${response.restaurantInformation.name}" placeholder="قاسم سلیمانی" required>
                        <div id="restaurantNameValidationMessage"
                            class="invalid-feedback">
                            ....
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-2">
                <div class="form-group">
                    <label class="text-label"> انتخاب دسته بندی رستوران *</label>
                        <div class="card">
                        <div class="">
                        </div>
                        <div class="card-body">
                            <div class="row">`;
            let idCategory = response.restaurantInformation.categories.map(
                (restaurantCategory) => restaurantCategory.id
            );
            var myArray = [
                "",
                "checkbox-info",
                "checkbox-success",
                "checkbox-warning",
                "checkbox-danger",
            ];
            for (const [key, payam] of Object.entries(
                response.restaurantCategories
            )) {
                var rand = myArray[(Math.random() * myArray.length) | 0];
                let kelid = Number(key) + 1;
                let checked = idCategory.includes(payam.id);
                htmlEntities += `
                                        <div class="col-xl-4 col-xxl-6 col-6">
                                            <div class="form-check custom-checkbox mb-3 ${
                                                " " + rand
                                            }">
                                                <input name="categoriesRestaurant" type="checkbox" value="${
                                                    payam.id
                                                }" class="form-check-input" ${
                    checked ? " checked" : ""
                } id="customCheckBox2">
                                                <label class="form-check-label" for="customCheckBox2">${
                                                    payam.name
                                                }</label>
                                            </div>
                                        </div>
                                                    `;
            }
            htmlEntities += `</div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 mb-2">
                    <div class="form-group">
                        <label class="text-label">شماره حساب *</label>
                        <input type="text" onkeyup="bankAccountNumberValidation(this)"
                            name="bankAccountNumber" class="form-control"
                            placeholder="6273811619866066" value="${response.restaurantInformation.account_payment}" required>
                        <div id="bankAccountNumberValidationMessage"
                            class="invalid-feedback">
                            ....
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-2">
                    <div class="form-group">
                        <label class="text-label"> شماره تلفن رستوران *</label>
                        <input type="text"
                            onkeyup="phoneNumberRestaurantValidation(this)"
                            value="${response.restaurantInformation.phones[0].phoneNumber}" name="phoneNumberRestaurant" class="form-control"
                            placeholder="09123456789" required>
                        <div id="phoneNumberRestaurantValidationMessage"
                            class="invalid-feedback">
                            ....
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                <div class="form-group" style="height:400px;">
                <div id="panel" style="display:none;" class="panel" style="height: fit-content;">
                        <label dir="rtl" style="margin-left: 50%;">عبارت جستجو</label>
                        <input style="width: 100%;" dir="rtl" type="text" placeholder="term" required id="term">
                        <h4 style="margin-left: 50%;">نقطه مرکز</h4>
                        <label>latitude</label>
                        <input  dir="ltr" type="text" placeholder="latitude" required id="center_lat" name="center_lat">
                        <br>
                        <label>longitude</label>
                        <input  dir="ltr" type="text" placeholder="longitude" required id="center_lng" name="center_lng">
                        <br>
                        <button id="search" style="margin-top: 10px;" onclick="search()">Search</button>
                        <!--Search_Result-->
                        <p dir="rtl" id="resultCount"></p>
                        <div id="resualt">

                        </div>

                    </div>
                    <label class="text-label">نشانی رستوران *</label>
                    <div id="map"
                        style="width: 70%; height: 25%; background: #eee; border: 2px solid #aaa;position: absolute;z-index: 1;"></div>
                   
                </div>
            </div>
                <div class="col-lg-12 mb-3">
                    <button id="personlalEnformationSaveButton"
                        onclick="saveRestaurantInformations(this)" type="button"
                        class="btn btn-primary mb-2 ml-2">ارسال</button>
                </div>
            </div>`;
        }
        document.getElementById("mainDiv").innerHTML = htmlEntities;
        var centerLat = document.getElementById("center_lat");
        var centerLng = document.getElementById("center_lng");

        //init the map
        var myMap = new L.Map("map", {
            key: "web.9vM61le4595SKsMFxfA9AXG5zIpYXuW8pVHoMg0I",
            maptype: "dreamy",
            poi: true,
            traffic: false,
            center: [
                response.restaurantInformation.addresses[0].lat,
                response.restaurantInformation.addresses[0].lang,
            ],
            zoom: 14,
        });
        //adding the marker to map
        var marker = L.marker(
            [
                response.restaurantInformation.addresses[0].lat,
                response.restaurantInformation.addresses[0].lang,
            ],
            {
                title: "unselected",
                draggable: true,
                clickable: true,
            }
        ).addTo(myMap);
        centerLat.value = response.restaurantInformation.addresses[0].lat;
        centerLng.value = response.restaurantInformation.addresses[0].lang;
        //on map binding
        myMap.on("click", addMarkerOnMap);

        var greenIcon = new L.Icon({
            iconUrl: `icon/marker-icon-2x-green.png`,
            shadowUrl: "icon/shadow/marker-shadow.png",
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41],
        });

        var redIcon = new L.Icon({
            iconUrl: "icon/marker-icon-2x-red.png",
            shadowUrl: "icon/shadow/marker-shadow.png",
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41],
        });

        //on map click function
        function addMarkerOnMap(e) {
            marker.setLatLng(e.latlng);
            marker
                .bindPopup(`lat : ${e.latlng.lat} - lng : ${e.latlng.lng}`)
                .openPopup();
            centerLat.value = e.latlng.lat;
            centerLng.value = e.latlng.lng;
        }

        var searchMarkers = [];

        //sending request to Search API
        function search() {
            // restarting the markers
            for (var j = 0; j < searchMarkers.length; j++) {
                if (searchMarkers[j] != null) {
                    myMap.removeLayer(searchMarkers[j]);
                    searchMarkers[j] = null;
                }
            }
            marker.setLatLng([centerLat.value, centerLng.value]);
            //getting term value from input tag
            var term = document.getElementById("term").value;
            //making url
            var url = `https://api.neshan.org/v1/search?term=${term}&lat=${centerLat.value}&lng=${centerLng.value}`;
            //add your api key
            var params = {
                headers: {
                    "Api-Key": "web.9vM61le4595SKsMFxfA9AXG5zIpYXuW8pVHoMg0I",
                },
            };
            //sending get request
            axios
                .get(url, params)
                .then((data) => {
                    document.getElementById("resualt").innerHTML = "";
                    if (data.data.count != 0) {
                        document.getElementById("panel").style = "height: 60%;";
                    } else {
                        document.getElementById("panel").style =
                            "height: fit-content;";
                    }
                    document.getElementById(
                        "resultCount"
                    ).textContent = `تعداد نتایج : ${data.data.count}`;
                    //set center of map to marker location
                    console.log(data.data);
                    myMap.flyTo([centerLat.value, centerLng.value], 12);

                    //for every search resualt add marker
                    var i;
                    for (i = 0; i < data.data.count; i++) {
                        var info = data.data.items[i];
                        searchMarkers[i] = L.marker(
                            [info.location.y, info.location.x],
                            {
                                icon: greenIcon,
                                title: info.title,
                            }
                        ).addTo(myMap);
                        makeDiveResualt(data.data.items[i], i);
                    }
                })
                .catch((error) => {
                    document.getElementById("resualt").innerHTML = "";
                    document.getElementById("panel").style =
                        "height: fit-content;";
                    document.getElementById(
                        "resultCount"
                    ).textContent = `تعداد نتایج : 0`;
                    console.log(error.response);
                });
        }

        function makeDiveResualt(data, index) {
            var resultsDiv = document.getElementById("resualt");
            var resultDiv = document.createElement("div");
            resultDiv.onclick = function (e) {
                myMap.flyTo([data.location.y, data.location.x], 16);
                // searchMarkers[index].setIcon(redIcon);
                // setTimeout(function(){
                //     searchMarkers[index].setIcon(greenIcon);
                // },4000);
                for (var i = 0; i < searchMarkers.length; i++) {
                    if (i == index) {
                        searchMarkers[i].setIcon(redIcon);
                        continue;
                    }
                    searchMarkers[i].setIcon(greenIcon);
                }
            };
            resultDiv.dir = "ltr";
            var resultAddress = document.createElement("pre");
            resultAddress.textContent = `title : ${data.title} \n Address : ${data.address} \n type : ${data.type}`;
            resultAddress.style = `border: solid ${generateRandomColor()};`;
            resultsDiv.appendChild(resultDiv);
            resultDiv.appendChild(resultAddress);
        }

        //random color generator :))
        function generateRandomColor() {
            var letters = "0123456789ABCDEF";
            var color = "#";
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    };

    // Send the data.
    xhr.send();
}
