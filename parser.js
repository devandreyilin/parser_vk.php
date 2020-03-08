$(function () {

   function sendMail() {
      // Отправка письма ajax
      let url = $('input[name="url"]').val();
      if (url !== '' && url.match('vk.com')) {
         if (!url.match('m.vk')) {
            url = url.replace('vk.com', 'm.vk.com');
         }
         $.post(
             './parser.php',
             {
                'url': url,
             },
             showLinks
         );
      } else {
         alert('Ссылка некорректна');
      }
   }

   $('.btn-submit').on('click', sendMail);

   function showLinks(data) {
      const out = $('#response .out'),
          temp = $('#response .temp');
      out.html('');
      temp.html('');

      data = JSON.parse(data);
      temp.append(data);

      let video = $('.vv_inline_video');

      let videoLink = video.children('source')[1].src;

      out.html(`<br>Скачайте видео, кликнув правой кнопкой мыши<br><br><iframe src="${videoLink}"></iframe><br><br><a href="${videoLink}" target="_blank">Открыть в новой вкладке</a>`);
   }

});