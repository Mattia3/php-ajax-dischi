<!DOCTYPE html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" >
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> 
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>


<body>

  <header>
    <div class="header-container"></div>
  </header>

  <main class="container-main" id="vueContainer">
    <div class="container">
      <div class="row row-cols-5">
        <div class="col" v-for="album,i in albumsList" :key="i">
          <div class="background-card">
            <img :src="album.img"  class="my-img" :alt="album.title">
            <div class="my-card-body">
              <h3 class="text-center text-white text-uppercase">{{ album.title }}</h3>
              <div class="subtitle-container">
                <h5>{{ album.author }}</h5>
                <h5>{{ album.years }}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="mainVue.js"></script>
</body>
</html>