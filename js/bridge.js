var Haw = (function (module) {
  'use strict';

  var Bridge = module.Bridge = module.Bridge || {};

  Bridge.Facebook = (function(){
    var appId = "437411223004983";

    return {
      appId:  appId,
      appUrl: "http://apps.facebook.com/" + appId + "/"
    };
  })();

  Bridge.SiteContext = "howaboutwe";

  Bridge.GA = {
    house: "UA-13033287-1",
    promo: "UA-13033287-4"
  };

  Bridge.WP = "";

  return module;

}(Haw || {}));

