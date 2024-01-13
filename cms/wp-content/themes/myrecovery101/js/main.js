/**
 * JS using Revealing Module Pattern.
 */

const App = (() => {
  /** DOM Elements. */
  const body = document.querySelector('body');

  /** Events. */
  const events = () => {
    console.log('Load main.js file!');
  };

  return {
    /** Initialize the events. */
    init: () => {
      events();
    },
  };
})();

/** Initialize the App. */
App.init();
