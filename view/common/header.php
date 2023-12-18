<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/common/css/header.css">
</head>

<body>
    <div class="header-container">
        <div class="header-main">
            <div class="header-title-container">
                <h1>RêntHûb</h1>
            </div>
            <div class="header-search-container" onclick="changeVisibility();">
                <input id="header-input-text" class="classic-input" type="text" placeholder="Ciudad, barrio, calle...">
                <button class="classic-primary-button">Buscar</button>
            </div>
            <div class="header-buttons-container">

            </div>
        </div>
        <!--
        <div id="advanced-search-box" class="header-advanced-search show-advanced-search">
            <div class="category-container">
                <div id="category-pisos" class="single-category-container  selected-icon" onclick="selectCategory(this)">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512">
                        <path d="M14,13h2v2h-2v-2Zm4,2h2v-2h-2v2Zm-4,4h2v-2h-2v2Zm4,0h2v-2h-2v2ZM14,7h2v-2h-2v2Zm4,0h2v-2h-2v2Zm-4,4h2v-2h-2v2Zm4,0h2v-2h-2v2ZM24,3V24H0V8.829c0-.801,.312-1.555,.879-2.122l2.707-2.707c1.289-1.29,3.539-1.29,4.828,0l1.586,1.586V3c0-1.654,1.346-3,3-3h8c1.654,0,3,1.346,3,3Zm-14,5.829c0-.267-.104-.519-.293-.708l-2.707-2.707c-.526-.526-1.474-.526-2,0l-2.707,2.707c-.189,.189-.293,.44-.293,.708v13.171H10V8.829ZM22,3c0-.551-.449-1-1-1H13c-.551,0-1,.449-1,1V22h10V3ZM5,15h2v-2h-2v2Zm0-4h2v-2h-2v2Zm0,8h2v-2h-2v2Z" />
                    </svg>
                    <h2 class="icon-title">Pisos</h2>
                </div>
                <div id="category-casa" class="single-category-container" onclick="selectCategory(this)">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512">
                        <path d="M14,13h2v2h-2v-2Zm4,2h2v-2h-2v2Zm-4,4h2v-2h-2v2Zm4,0h2v-2h-2v2ZM14,7h2v-2h-2v2Zm4,0h2v-2h-2v2Zm-4,4h2v-2h-2v2Zm4,0h2v-2h-2v2ZM24,3V24H0V8.829c0-.801,.312-1.555,.879-2.122l2.707-2.707c1.289-1.29,3.539-1.29,4.828,0l1.586,1.586V3c0-1.654,1.346-3,3-3h8c1.654,0,3,1.346,3,3Zm-14,5.829c0-.267-.104-.519-.293-.708l-2.707-2.707c-.526-.526-1.474-.526-2,0l-2.707,2.707c-.189,.189-.293,.44-.293,.708v13.171H10V8.829ZM22,3c0-.551-.449-1-1-1H13c-.551,0-1,.449-1,1V22h10V3ZM5,15h2v-2h-2v2Zm0-4h2v-2h-2v2Zm0,8h2v-2h-2v2Z" />
                    </svg>
                    <h2 class="icon-title">Casas</h2>
                </div>
                <div id="category-local" class="single-category-container" onclick="selectCategory(this)">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512">
                        <path d="M14,13h2v2h-2v-2Zm4,2h2v-2h-2v2Zm-4,4h2v-2h-2v2Zm4,0h2v-2h-2v2ZM14,7h2v-2h-2v2Zm4,0h2v-2h-2v2Zm-4,4h2v-2h-2v2Zm4,0h2v-2h-2v2ZM24,3V24H0V8.829c0-.801,.312-1.555,.879-2.122l2.707-2.707c1.289-1.29,3.539-1.29,4.828,0l1.586,1.586V3c0-1.654,1.346-3,3-3h8c1.654,0,3,1.346,3,3Zm-14,5.829c0-.267-.104-.519-.293-.708l-2.707-2.707c-.526-.526-1.474-.526-2,0l-2.707,2.707c-.189,.189-.293,.44-.293,.708v13.171H10V8.829ZM22,3c0-.551-.449-1-1-1H13c-.551,0-1,.449-1,1V22h10V3ZM5,15h2v-2h-2v2Zm0-4h2v-2h-2v2Zm0,8h2v-2h-2v2Z" />
                    </svg>
                    <h2 class="icon-title">Locales</h2>
                </div>
                <div id="category-oficina" class="single-category-container" onclick="selectCategory(this)">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512">
                        <path d="M14,13h2v2h-2v-2Zm4,2h2v-2h-2v2Zm-4,4h2v-2h-2v2Zm4,0h2v-2h-2v2ZM14,7h2v-2h-2v2Zm4,0h2v-2h-2v2Zm-4,4h2v-2h-2v2Zm4,0h2v-2h-2v2ZM24,3V24H0V8.829c0-.801,.312-1.555,.879-2.122l2.707-2.707c1.289-1.29,3.539-1.29,4.828,0l1.586,1.586V3c0-1.654,1.346-3,3-3h8c1.654,0,3,1.346,3,3Zm-14,5.829c0-.267-.104-.519-.293-.708l-2.707-2.707c-.526-.526-1.474-.526-2,0l-2.707,2.707c-.189,.189-.293,.44-.293,.708v13.171H10V8.829ZM22,3c0-.551-.449-1-1-1H13c-.551,0-1,.449-1,1V22h10V3ZM5,15h2v-2h-2v2Zm0-4h2v-2h-2v2Zm0,8h2v-2h-2v2Z" />
                    </svg>
                    <h2 class="icon-title">Oficinas</h2>
                </div>
                <div id="category-garaje" class="single-category-container" onclick="selectCategory(this)">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512">
                        <path d="M14,13h2v2h-2v-2Zm4,2h2v-2h-2v2Zm-4,4h2v-2h-2v2Zm4,0h2v-2h-2v2ZM14,7h2v-2h-2v2Zm4,0h2v-2h-2v2Zm-4,4h2v-2h-2v2Zm4,0h2v-2h-2v2ZM24,3V24H0V8.829c0-.801,.312-1.555,.879-2.122l2.707-2.707c1.289-1.29,3.539-1.29,4.828,0l1.586,1.586V3c0-1.654,1.346-3,3-3h8c1.654,0,3,1.346,3,3Zm-14,5.829c0-.267-.104-.519-.293-.708l-2.707-2.707c-.526-.526-1.474-.526-2,0l-2.707,2.707c-.189,.189-.293,.44-.293,.708v13.171H10V8.829ZM22,3c0-.551-.449-1-1-1H13c-.551,0-1,.449-1,1V22h10V3ZM5,15h2v-2h-2v2Zm0-4h2v-2h-2v2Zm0,8h2v-2h-2v2Z" />
                    </svg>
                    <h2 class="icon-title">Garajes</h2>
                </div>
            </div>
        </div>
-->
    </div>
    <script>
        function changeVisibility() {
            var div = document.getElementById("advanced-search-box");
            if (div.classList.contains("hide-advanced-search")) {
                div.classList.remove("hide-advanced-search");
                div.classList.add("show-advanced-search");
            } else {
                div.classList.remove("show-advanced-search");
                div.classList.add("hide-advanced-search");
            }
        }

        function selectCategory(element) {
            var allCategories = document.querySelectorAll('.single-category-container');
            allCategories.forEach(function(category) {
                category.classList.remove('selected-icon');
            });
            element.classList.add('selected-icon');
        }
    </script>
</body>

</html>