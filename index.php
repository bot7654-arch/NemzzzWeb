<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nemzzz | Official Website</title>
    <link rel="stylesheet" href="./css/style.css">

</head>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Отмена стандартной отправки формы

        let formData = new FormData(form);

        fetch("process_form.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                showPopup("Done!"); // Покажем всплывающее окно
                form.reset(); // Очистка формы
            } else {
                showPopup("Error: " + data.message); // Ошибка
            }
        })
        .catch(error => console.error("Ошибка:", error));
    });

    function showPopup(message) {
        let popup = document.createElement("div");
        popup.textContent = message;
        popup.style.position = "fixed";
        popup.style.top = "50%";
        popup.style.left = "50%";
        popup.style.transform = "translate(-50%, -50%)";
        popup.style.background = "rgba(0, 0, 0, 0.8)";
        popup.style.color = "#fff";
        popup.style.padding = "15px 30px";
        popup.style.borderRadius = "10px";
        popup.style.fontSize = "18px";
        popup.style.textAlign = "center";
        popup.style.zIndex = "1000";
        popup.style.opacity = "0";
        popup.style.transition = "opacity 0.5s ease-in-out";

        document.body.appendChild(popup);

        setTimeout(() => {
            popup.style.opacity = "1";
        }, 50);

        setTimeout(() => {
            popup.style.opacity = "0";
            setTimeout(() => popup.remove(), 500);
        }, 2000);
    }
});
</script>

<body>
    <div class="header">
        <a href="/" class="interactive-title_1">
            <h1>NEMZZZ</h1>
        </a>
        <a href="https://example.com" class="interactive-title_2">
            <h1>SHOP NOW</h1>
        </a>

    </div>
     <!-- Контейнер с изображением -->
    <div class="container">
        <div class="container_item">
            <a href="https://open.spotify.com/album/2rIbOVBLitHcUD2g9UCz1P" target="_blank"> <!-- Ссылка на нужную страницу -->
                <img src="./img/DO NOT DISTURB ALBUM PIC.jpg" alt="" class="container-image">
                <p class="image-caption">Album</p>
                <p class="image-caption">DO NOT DISTURB - 2024</p> <!-- Вторая подпись -->
            </a>
        </div>

        <div class="container_item">
            <a href="https://open.spotify.com/album/7htW5qv2yBt0dH7be0zMbc" target="_blank">
                <img src="./img/ESCAPE.jpg" alt="" class="container-image">
                <p class="image-caption">Single</p>
                <p class="image-caption">ESCAPE - 2024</p>
            </a>
        </div>

        <div class="container_item">
            <a href="https://open.spotify.com/album/0FG0BmMgabNW3UGesOFmeE" target="_blank">
                <img src="./img/US VS THEM.jpg" alt="" class="container-image">
                <p class="image-caption">Single</p>
                <p class="image-caption">US VS THEM - 2024</p>
            </a>
        </div>

        <div class="container_item">
            <a href="https://open.spotify.com/album/7s4VOuuo8CvJ5VLCmpBU8P" target="_blank">
                <img src="./img/MONEY AND VIBES.jpg" alt="" class="container-image">
                <p class="image-caption">Single</p>
                <p class="image-caption">MONEY AND VIBES - 2023</p>
            </a>
        </div>

        <div class="container_item">
            <a href="https://open.spotify.com/album/3OhdKF1s2F5ZwXNd3UXYaP" target="_blank">
                <img src="./img/EVICTED.jpg" alt="" class="container-image">
                <p class="image-caption">Single</p>
                <p class="image-caption">EVICTED - 2023</p>
            </a>
        </div>

        <div class="container_item">
            <a href="https://open.spotify.com/album/7rROu8cbJwD6gr3DwcPx07" target="_blank">
                <img src="./img/THERAPY.jpg" alt="" class="container-image">
                <p class="image-caption">Single</p>
                <p class="image-caption">THERAPY - 2023</p>
            </a>
        </div>

        <div class="container_item">
            <a href="https://open.spotify.com/album/1QpadSFWh3DiThIuDpcRBP" target="_blank">
                <img src="./img/LOVE STORY.jpg" alt="" class="container-image">
                <p class="image-caption">Single</p>
                <p class="image-caption">LOVE STORY - 2023</p>
            </a>
        </div>

        <div class="container_item">
            <a href="https://open.spotify.com/album/6Vgw8H7YYcQnT1imAr4FOL" target="_blank">
                <img src="./img/W2L.jpg" alt="" class="container-image">
                <p class="image-caption">Single</p>
                <p class="image-caption">W2L - 2023</p>
            </a>
        </div>
    </div> 

    <div class="container_show">
        <a href="https://open.spotify.com/artist/3DHtfeD4PsmR9YGhCP4VF7" target="_blank" class="container_show_text">
            <p>SHOW MORE</p>
        </a>
    </div>

    <div class="container_form">
        <div class="sign_up_text">
            <p>SIGN UP</p>
        </div>   
        <div class="be_the_first">
            <p>Be the first to know about new collections and exclusive offers.</p>

        </div> 
        <div class="container_info">
            <div class="form_container">
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                
                <form action="process_form.php" method="POST">
                    <input type="text" id="name_first_name" name="name_first_name" placeholder="First Name" required>
                    <input type="text" id="name_last_name" name="name_last_name" placeholder="Last Name" required>
                    <input type="email" name="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <select id="country" name="country" required>
                        <option value="" disabled selected>Select Country</option>
                        <option value="USA">United States</option>
                        <option value="Canada">Canada</option>
                        <option value="Germany">Germany</option>
                        <option value="UK">United Kingdom</option>
                        <option value="India">India</option>
                        <!-- Добавьте другие страны по вашему усмотрению -->
                    </select>
                    <div class="g-recaptcha" data-sitekey="6Lc4U9cqAAAAAFn2_sOe-9QnVwOaIj8Wd1tf29XD"></div
                    <button type="submit">Submit</button>  <!-- Кнопка отправки формы -->
                </form>
            </div>
            
        </div>

    <div class="container_by_sub">
        <div class="by_sub">
            <p>By subscribing, I confirm I have read and understood the privacy and cookie                                              
               policy and agree to the processing of my data and the use of 
                            cookies in accordance with it.</p>
        </div> 
    </div>   

    </div> 
    
    <div class="nav_bar">
        <a href="https://example.com" class="terms">
            <p>Terms</p>
        </a>   
        <a href="https://example.com" class="privacy">
            <p>Privacy</p>
        </a>  
        <a href="https://example.com" class="returns">
            <p>Returns</p>
        </a> 
        <a href="https://example.com" class="content">
            <p>Content</p>
        </a> 
    </div>
</div>
    

   
</body>
</html>
