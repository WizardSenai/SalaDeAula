$(document).ready(function() {
    // Initially hide all tables except for the first one
    $('table:not(:first)').hide();
  
    // Get a reference to the page info element
    var pageInfoElem = $('#page-info');
  
    // Update the page info element with the current page number
    function updatePageInfo(pageNum) {
      pageInfoElem.text('Page ' + pageNum);
    }
  
    // Set the initial page number
    var currentPage = 1;
    updatePageInfo(currentPage);
  
    // Get a reference to the next button
    var nextBtn = $('#next');
  
    // Function to toggle the visibility of the next page
    function toggleNextPage() {
      var nextPageElem = $('#page' + (currentPage + 1));
      if (nextPageElem.is(':visible')) {
        nextPageElem.hide();
        currentPage++;
        updatePageInfo(currentPage);
      } else {
        $('table:visible').hide();
        nextPageElem.show();
        currentPage++;
        updatePageInfo(currentPage);
      }
    }
  
    // Set the click event handler for the next button
    nextBtn.click(function() {
      if (currentPage < $('table').length) {
        toggleNextPage();
      }
    });
  
    // Get a reference to the previous button
    var prevBtn = $('#prev');
  
    // Function to toggle the visibility of the previous page
    function togglePrevPage() {
      if (currentPage > 1) {
        currentPage--;
        updatePageInfo(currentPage);
        $('table:visible').hide();
        $('#page' + currentPage).show();
      }
    }
  
    // Set the click event handler for the previous button
    prevBtn.click(function() {
      togglePrevPage();
    });
  
    // Show the first page initially
    toggleNextPage();
  });