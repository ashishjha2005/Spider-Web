// Function to toggle the description
function toggleDescription() {
    var description = document.getElementById("description");
    if (description.style.display === "none" || description.style.display === "") {
      description.style.display = "block";
      setTimeout(function() {
        description.style.opacity = "1";
        // Add event listener to close description when clicking outside after a short delay
        setTimeout(function() {
          document.addEventListener('click', outsideClickListener);
        }, 100);
      }, 10); // Delay to ensure display change is applied before opacity transition starts
    } else {
      closeDescription();
    }
  }
  
  // Function to close the description
  function closeDescription() {
    var description = document.getElementById("description");
    description.style.opacity = "0";
    setTimeout(function() {
      description.style.display = "none";
      // Remove event listener when description is closed
      document.removeEventListener('click', outsideClickListener);
    }, 300); // Wait for opacity transition to finish before hiding the element
  }
  
  // Function to handle click outside description container
  function outsideClickListener(event) {
    var description = document.getElementById("description");
    if (!description.contains(event.target)) {
      closeDescription();
    }
  }
  