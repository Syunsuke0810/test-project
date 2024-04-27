<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div id="step1">
      <iframe
        id="video1"
        class="m-4"
        width="560"
        height="315"
        src="https://www.youtube.com/embed/n2OARCXuuow?si=z5SEMAHI4t2z4HZu?enablejsapi=1"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen
      ></iframe>
      <button
        class="px-4 py-2 mx-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-700"
        onclick="switchVideo(1)"
      >
        視聴完了
      </button>
    </div>

    <div id="step2" class="hidden">
      <iframe
        id="video2"
        class="m-4"
        width="560"
        height="315"
        src="https://www.youtube.com/embed/w2q2CdXayc4?si=EIqHxskNE7WbXTuQ"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen
      ></iframe>
      <button
        class="px-4 py-2 mx-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-700"
        onclick="switchVideo(2)"
      >
        視聴完了
      </button>
    </div>

    <div id="step3" class="hidden">

        <iframe
        id="video3"
        class="m-4"
        width="560"
        height="315"
        src="https://www.youtube.com/embed/biuVgDqFNco?si=2TMWrbfVYN3nmfn7"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen
      ></iframe>
      <button
        class="px-4 py-2 mx-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-700"
        onclick="switchVideo(3)"
      >
        視聴完了
      </button>
        <div>
        「視聴完了」ボタンを押す前に必ず動画を停止してください。
        </div>
    </div>

    <div id="step4" class="hidden m-4">
      <a
        class="shadow-lg mx-4 px-4 py-2 bg-blue-400 text-lg text-white font-semibold rounded hover:bg-blue-500 hover:shadow-sm hover:translate-y-0.5 transform transition"
        href="{{ route('index') }}"
        >掲示板へ</a
      >
    </div>

    <script>
      function switchVideo(current) {
        let currentStep = document.getElementById("step" + current);
        let nextStep = document.getElementById("step" + (current + 1));
        let currentVideo = document.getElementById("video" + current);

        if (currentStep) {
          currentStep.classList.add("hidden");
        }
        if (nextStep) {
          nextStep.classList.remove("hidden");
        }
      }
    </script>
  </body>
</html>
