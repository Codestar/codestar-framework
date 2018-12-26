window.$docsify = {
  name: '',
  homepage: 'quickstart.md',
  loadSidebar: 'sidebar.md',
  maxLevel: 4,
  subMaxLevel: 3,
  auto2top: true,
  search: {
    placeholder: 'Type to search...',
  },
  plugins: [
    function( hook, vm ) {

      hook.mounted(function() {

        var logo       = document.createElement('a');
        logo.href      = vm.config.nameLink;
        logo.classList = 'csf-logo-link';
        logo.innerHTML = '<div class="csf-logo"><div class="csf-logo-effects"><i></i><i></i><i></i><i></i></div>' +
        '<div class="csf-core-logos">' +
        '<img src="/assets/images/wp-logo.svg" alt="Codestar Framework" class="csf-wp-logo">' +
        '<img src="/assets/images/wp-plugin-logo.svg" alt="Codestar Framework" class="csf-wp-plugin-logo">' +
        '</div>' +
        '<div class="csf-logo-title">Codestar Framework</div><div class="csf-logo-version">v2.0</div></div>';

        var search = document.querySelector('.search');
        search.parentNode.insertBefore(logo, search);

        var credit = document.createElement('div');
        credit.classList = 'csf-credit-text';
        credit.innerHTML = '<a href="/">&larr; Go to Home</a><br/><br/>Thank you for creating with Codestar Framework. Powered by <a href="http://themeforest.net/user/Codestar?ref=Codestar" target="_blank">Codestar</a>';

        var sidebar = document.querySelector('.sidebar');

        sidebar.appendChild(credit);

      });

      hook.afterEach(function (html) {
        return html + '<div class="csf-credit-text">Thank you for creating with Codestar Framework. Powered by <a href="http://themeforest.net/user/Codestar?ref=Codestar" target="_blank">Codestar</a></div>'
      });

      hook.doneEach( function() {

        // Tabs
        var tabs = document.querySelectorAll('.csf-tabs');

        tabs.forEach( function( item ) {

          var buttons  = item.querySelectorAll('.csf-tab-title');
          var contents = item.querySelectorAll('.csf-tab-content');

          buttons.forEach( function( button, index ) {

            button.addEventListener( 'click', function( event ) {

              contents.forEach( function( target ) {
                target.classList.remove('csf-tab-active');
              });

              buttons.forEach( function( target ) {
                target.classList.remove('csf-tab-active');
              });

              event.target.classList.add('csf-tab-active');

              if( contents[index] ) {
                contents[index].classList.add('csf-tab-active');
              }

            }, false);

          });

        });

      });

    },
  ]
};
