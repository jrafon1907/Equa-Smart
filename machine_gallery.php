<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="shortcut icon" href="images/equasmartlogo_croppedlogo.png" type="image/svg+xml">
    <title>Machine Gallery</title>
    <style>
        body {
            display: grid;
            grid-template-columns: auto 1fr;
            margin: 0;
            height: 100vh;
            background-color: azure;
        }

        .view-buttons {
            display: flex;
            justify-content: start;
            margin-bottom: 1%;
            margin-top: 1%;
        }

        .view-buttons button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: lightsalmon;
            color: #000;
        }

        .view-buttons button:hover {
            background-color: peru;
        }

        .sort-buttons {
            margin-bottom: 20px;
            text-align: center;
        }

        .sort-buttons button {
            padding: 10px 15px;
            margin: 0 10px;
            font-size: 16px;
            background-color: aquamarine;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .sort-buttons button:hover {
            background-color: #0088cc;
        }

        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .image-gallery img {
            max-width: 200px;
            margin: 2%;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .image-gallery img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        /* Modal to display enlarged image */
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .modal img {
            max-width: 90vw;
            max-height: 90vh;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .modal .close-btn {
            position: absolute;
            top: 20px;
            right: 40px;
            font-size: 40px;
            color: white;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <?php include "user_menu.php"; ?>
    <div class="container_menu">

        <!-- Sorting Buttons -->
        <div class="sort-buttons">
            <button id="sortAscBtn">Sort by Date (Ascending)</button>
            <button id="sortDescBtn">Sort by Date (Descending)</button>
        </div>

        <div class="gallery-container">
            <!-- Water Machine Gallery -->
            <div id="waterMachineGallery" class="image-gallery">
                <?php
                // Load images from 'uploads' directory
                $waterDir = './uploads/';
                $waterImages = glob($waterDir . "*.{jpg,png,gif,jpeg}", GLOB_BRACE);

                // Sort function for images based on filenames (assuming they contain dates)
                usort($waterImages, function ($a, $b) {
                    // Extract the date from the filename (assuming it's in Y-m-d format)
                    preg_match('/(\d{4}-\d{2}-\d{2})/', basename($a), $aMatch);
                    preg_match('/(\d{4}-\d{2}-\d{2})/', basename($b), $bMatch);
                    $aDate = isset($aMatch[1]) ? strtotime($aMatch[1]) : 0;
                    $bDate = isset($bMatch[1]) ? strtotime($bMatch[1]) : 0;
                    return $aDate - $bDate;
                });

                if (count($waterImages) > 0) {
                    foreach ($waterImages as $image) {
                        $imageUrl = str_replace($waterDir, '/uploads/', $image);
                        echo "<img src='$imageUrl' alt='Water Machine Image' class='gallery-image' style='transform:rotate(180deg);' />";
                        // echo "<img src='$imageUrl' alt='Water Machine Image' class='gallery-image'/>";

                    }
                } else {
                    echo "<p>No images found in Water Machine.</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Modal for Enlarged Image -->
    <div id="imageModal" class="modal">
        <span class="close-btn">&times;</span>
        <img id="modalImage" src="" alt="Enlarged Image" />
    </div>

    <script>
        // Enlarge image when clicked
        document.querySelectorAll('.gallery-image').forEach(function(image) {
            image.addEventListener('click', function() {
                var modal = document.getElementById('imageModal');
                var modalImage = document.getElementById('modalImage');
                modalImage.src = this.src; // Set the clicked image source to the modal
                modal.style.display = 'flex'; // Show the modal
            });
        });

        // Close modal when clicking on the close button
        document.querySelector('.close-btn').addEventListener('click', function() {
            var modal = document.getElementById('imageModal');
            modal.style.display = 'none';
        });

        // Close modal when clicking outside the image
        window.addEventListener('click', function(event) {
            var modal = document.getElementById('imageModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });

        // Sorting Functionality
        function sortImages(order) {
            const waterGallery = document.getElementById('waterMachineGallery');

            const sortImagesInGallery = (gallery) => {
                const images = Array.from(gallery.querySelectorAll('img'));
                const sortedImages = images.sort((a, b) => {
                    // Extract the date in YYYY.MM.DD format from the filename
                    const dateA = a.src.match(/(\d{4}\.\d{2}\.\d{2})/);
                    const dateB = b.src.match(/(\d{4}\.\d{2}\.\d{2})/);

                    // Ensure both images contain valid date matches before sorting
                    if (dateA && dateB) {
                        const parsedDateA = new Date(dateA[0].replace(/\./g, '-')); // Convert to 'YYYY-MM-DD' format
                        const parsedDateB = new Date(dateB[0].replace(/\./g, '-')); // Convert to 'YYYY-MM-DD' format

                        // Sort based on the selected order (ascending or descending)
                        return order === 'asc' ? parsedDateA - parsedDateB : parsedDateB - parsedDateA;
                    }

                    // If either image does not contain a valid date, leave their order unchanged
                    return 0;
                });

                // Clear gallery and re-add sorted images
                gallery.innerHTML = ''; // Clear gallery
                sortedImages.forEach(img => gallery.appendChild(img)); // Re-add sorted images
            };

                sortImagesInGallery(waterGallery);
        }

        // Handle sort buttons
        document.getElementById('sortAscBtn').addEventListener('click', function() {
            sortImages('asc');
        });

        document.getElementById('sortDescBtn').addEventListener('click', function() {
            sortImages('desc');
        });

        window.onload = function() {
            sortImages('desc'); // Default sort on load
        };
    </script>

</body>

</html>
<?php ob_end_flush(); ?>
