    <div id="footer">
      <div class="container">
        <p class="text-muted">ChromaHills.</p>
      </div>
    </div>


    <!-- Scripts and slow stuff
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        // Show more was the aspect of this small js project. Shorten to more to save typing.
        $(/*a tag for the more div*/'.more-div a').on('click', function(e){e.preventDefault();
        $(this)/* Make it work with the closest-ish tag to open */.closest(/* I used .more-div to allow multiple sliders on the same page */'.more-div')/* Locates the .more record inside .more-div */.find( /* The css class used to display the content when the <a> is pressed */'.more')./*Make the toggle go up and down*/slideToggle();
        });

    </script>
</body>
</html>