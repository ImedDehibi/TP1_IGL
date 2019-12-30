     <template>
  <div>
    <!--Navbar-->
    <mdb-navbar :color="'primary'" position="top" dark href="#" transparent scrolling>
      <mdb-container>
        <mdb-navbar-brand href="#"><strong>Scolarité App</strong></mdb-navbar-brand>
        <mdb-navbar-toggler style="max-width: 1140px">
          <mdb-navbar-nav>
            <mdb-nav-item href="#" waves-fixed active>Home</mdb-nav-item>
            <mdb-nav-item href="a-propos" waves-fixed>A propos</mdb-nav-item>
            <mdb-nav-item href="Description" waves-fixed>Description</mdb-nav-item>
          </mdb-navbar-nav>
          <!--Search form -->
          <mdb-navbar-nav right>
          <form>
            <mdb-input type="text" class="text-white f-flex" placeholder="Rechercher" aria-label="Search" navInput waves waves-fixed/>
          </form>
          </mdb-navbar-nav>

          <!--/.Search form -->
        </mdb-navbar-toggler>
      </mdb-container>
    </mdb-navbar>
    <!--/.Navbar-->
    <!--ViewWrapper-->
    <mdb-view>
      <mdb-mask class="gradient d-flex justify-content-center align-items-center">
        <mdb-container>
          <mdb-row>
            <mdb-col md="6" xl="5" class="mt-xl-5">
              <img src="" class="img-fluid"/>
            </mdb-col>
            <div class="white-text text-center text-md-left col-md-6 mt-xl-5 mb-5">
              <h1 class="h1-responsive font-weight-bold mt-sm-5">Connectez-vous</h1>
              <hr class="hr-light"/>
              <h6 class="mb-4">Notre application vous permet de gérer un compte où vous pouvez faire plains de choses</h6>
              <formulaire></formulaire>
        
            </div>
            <mdb-col md="6" xl="5" class="mt-xl-5">
              <img src="" class="img-fluid"/>
            </mdb-col>
          </mdb-row>
        </mdb-container>
      </mdb-mask>
    </mdb-view>
    <!--/.ViewWrapper-->
  </div>
</template>
<script>
  import { mdbContainer, mdbRow, mdbCol, mdbNavbar, mdbNavbarToggler, mdbNavbarNav, mdbNavItem, mdbInput, mdbView, mdbMask, mdbBtn, mdbNavbarBrand } from 'mdbvue';
  import  formulaire from './Formulaire'
  export default {
    name: 'AppPage',
    components: {
      mdbContainer,
      mdbRow,
      mdbCol,
      mdbNavbar,
      mdbNavbarToggler,
      mdbNavbarNav,
      mdbNavItem,
      mdbInput,
      mdbView,
      mdbMask,
      mdbBtn,
      mdbNavbarBrand
    }
  }
</script>
<style>
  .navbar {
    transition: 1s;
  }
  .navbar .md-form {
    margin: 0;
  }
  .top-nav-collapse {
    background-color: #424f95 !important;
  }
  @media (max-width: 990px){
    .navbar {
      background-color: #424f95 !important;
    }
  }
  .view {
    background-image: url('');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: calc(130vh - 60px);
  }
  .gradient {
    background: -moz-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
    background: -webkit-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
    background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 161, 0.7)), to(rgba(29, 210, 177, 0.7)));
    background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
    background: linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);

  }
  h6 {
      line-height: 1.7;
  }
</style>