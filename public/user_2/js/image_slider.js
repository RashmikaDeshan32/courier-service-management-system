
    // Array of image URLs
    const imageUrls = [
      "/user_2/images/services-details-6.jpg",
      "/user_2/images/Same-Day-Courier-Service--1024x683.jpg",
      "/user_2/images/fast-delivery.png"
      // Add more image URLs as needed
    ];
  
    // Index to track current image
    let currentIndex = 0;
  
    // Function to change the image
    function changeImage() {
      // Set the image source to the next URL in the array
      document.getElementById('sliderImage').src = imageUrls[currentIndex];
  
      // Increment the index
      currentIndex++;
  
      // Reset index to 0 if it exceeds the length of the array
      if (currentIndex >= imageUrls.length) {
        currentIndex = 0;
      }
    }
  
    // Call the changeImage function every 5 seconds (5000 milliseconds)
    setInterval(changeImage, 2000);
