async function loadImagesFromDatabase() {
    try {
      // Simulasi mengambil data gambar dari database
      const imageData = await fetchImagesFromDatabase();
      displayImages(imageData);
    } catch (error) {
      console.error('Error loading images from database:', error);
    }
  }
  
  function fetchImagesFromDatabase() {
    return new Promise((resolve) => {
      // Simulasi mengambil data gambar dari database
      const imageData = ['resizedImageData', 'resizedImageData2', 'resizedImageData3'];
      resolve(imageData);
    });
  }
  
  function displayImages(imageData) {
    const cardContainer = document.getElementById('cardContainer');
  
    imageData.forEach((data) => {
      const card = document.createElement('div');
      card.classList.add('card');
  
      const img = document.createElement('img');
      img.src = data; // Menggunakan data gambar yang diambil dari database
      card.appendChild(img);
  
      const title = document.createElement('h3');
      title.textContent = 'Uploaded Image';
      card.appendChild(title);
  
      const description = document.createElement('p');
      description.textContent = 'This is an image uploaded by the user.';
      card.appendChild(description);
  
      cardContainer.appendChild(card);
    });
  }
  
  loadImagesFromDatabase();

  function initMap() {
    var defaultLocation = {lat: -37.864, lng: 144.980}; // Koordinat St Kilda
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: defaultLocation
    });

    var marker = new google.maps.Marker({
        position: defaultLocation,
        map: map
    });

    // Event listener untuk mendapatkan koordinat ketika peta diklik
    google.maps.event.addListener(map, 'click', function(event) {
        var clickedLocation = event.latLng;
        marker.setPosition(clickedLocation);
        document.getElementById('lat').value = clickedLocation.lat();
        document.getElementById('lng').value = clickedLocation.lng();
    });
}