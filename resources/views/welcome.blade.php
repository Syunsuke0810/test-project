<x-guest-layout>
    <section style="background-image: url('{{ asset('logo/topimg3.8.png') }}'); background-size: cover; background-position: center; height:100vh;">


    <div  class="h-screen bg-right bg-cover pb-14">
        <div>
            <!--左側-->
            <div class="flex flex-col justify-center w-full overflow-y-hidden xl:w-2/5 lg:items-start ">
                {{-- <h1 class="my-4 text-3xl font-bold leading-tight text-center text-green-500 md:text-5xl md:text-left slide-in-bottom-h1" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">スキマ時間に簡単副業</h1> --}}
                 <br><br><br><br><br>
                <p class="my-4 mt-10 ml-5 text-3xl font-bold text-yellow-100 tml-4 ext-center mlleading-tight md:text-5l md:text-left slide-in-bottom-h1" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
                    動画や資料で勉強して時給アップ♪<br>
                    ブランクがある方や転職を希望される方もどうぞ<br></p>
                    <p class="my-4 mt-10 ml-5 text-3xl font-bold text-yellow-100 tml-4 ext-center mlleading-tight md:text-5l md:text-left slide-in-bottom-h1" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
                    最初から常時雇用されるのは不安ですよね。<br>
                    弊社コンサルタントが求人、求職をサポート！
                </p>


                <p class="my-4 mt-10 ml-5 text-xl font-bold text-blue-400 tml-4 ext-center mlleading-tight md:text-51 md:text-left slide-in-bottom-h1" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
                    下記の資格者が「ケアクルー」としてご登録しています。
                </p>
                <p class="pb-8 ml-5 font-bold text-center text-blue-400 lg:pb-6 md:text-left fade-in" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
                    保育士
                </p>
                <p class="pb-8 ml-5 font-bold text-center text-blue-400 lg:pb-6 md:text-left fade-in" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
                    幼稚園教諭・保育教諭
                </p>
                <p class="pb-8 ml-5 font-bold text-center text-blue-400 lg:pb-6 md:text-left fade-in" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
                    児童発達管理者
                </p>
                <p class="pb-8 ml-5 font-bold text-center text-blue-400 lg:pb-6 md:text-left fade-in" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
                    会員募集中。
                </p>

                <div class="flex justify-center w-full pb-24 md:justify-start lg:pb-0 fade-in ">
                    <a href="{{route('contact.create')}}"><x-primary-button class="ml-5 btnsetg">お問い合わせ</x-primary-button></a>
                    <a href="{{route('register')}}"><x-primary-button class="mr-5 btnsetr">採用担当者はこちら</x-primary-button></a>

                    <a href="{{route('register')}}" class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold text-indigo-600 transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 group">
                        <span class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-indigo-600 group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </span>
                        <span class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </span>
                        <span class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white">ケアクルー登録</span>
                        </a>
                </div>
            </div>
            {{-- 右側 --}}
            {{-- <div class="w-full py-6 overflow-y-hidden xl:w-3/5">
                <img class="w-full mx-auto rounded-lg shadow-xl lg:mr-0 slide-in-bottom" src="{{asset('/logo/topimg2.png')}}">
            </div> --}}
        </div>
        <div class="container flex flex-col flex-wrap items-center px-6 pt-10 mx-auto md:pt-18 md:flex-row">
            {{-- <div class="w-full p-4 mb-8 text-sm leading-8 text-center border-4 md:text-left fade-in">
                <p class="my-4 text-3xl font-bold text-green-400 tml-4 ext-center mlleading-tight md:text-5l md:text-left slide-in-bottom-h1" style="text-shadow: -1px -1px 0 #070707, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">
                    急に雇用されるのは不安・・・。そんな悩みも「ほいみん」の単発バイトでお試しチャレンジできます。
                </p>
            </div> --}}

            <!--フッタ-->
            {{-- <div class="w-full pt-10 pb-6 text-sm md:text-left fade-in">
                <p class="text-center text-gray-500">@2022 Laravelの教科書サンプル</p>
            </div> --}}
        </div>
    </div>
</section>

<section class="transition duration-500 ease-in-out bg-green-100 hover:bg-green-200">
    <div class="max-w-6xl p-5 mx-auto">
      <h2 class="my-4 text-3xl font-bold text-gray-900">
        <strong class="block transition duration-300 hover:text-green-600">ケアクルーって？</strong>
        <span class="text-xl">ご利用前にお読みください</span>
      </h2>
      <h3 class="my-5 text-2xl font-bold text-gray-800">
        子ども達の未来のために活躍できる人たちのことです
      </h3>
      <p class="my-4 text-gray-700">
        保育士や幼稚園教諭、児童発達管理者、指導員など、子どもたちに関わる仕事をする方は、子ども達の未来を守る大切な方々です。<br>
        しかし、近年では不適切な保育のニュースが度々流れるなど、とても残念な情報で溢れかえっています。<br>
        そこで弊社では国の古い研修動画に依存しない、最新の子ども達の成長に関する動画やテキストを用意し、それらの研修をクリアすることで業務の質を確保し、高単価を得られる人材を<strong class="font-bold">「ケアクルー」</strong>と名付けました。
      </p>
      <p class="my-4 text-gray-700">
        また、ケアクルーは副業にも最適で、自身が常勤で勤める施設以外に、シフトに合わせて勉強や横の繋がりを増やすための短時間利用が可能です。
      </p>

      <h3 class="my-5 text-2xl font-bold text-gray-800">
        資格や経験があれば誰でも「ケアクルー」になれる
      </h3>
      <p class="my-4 text-gray-700">
        「ほいみん」では以下の内容のようなケアクルー登録者が多数おります。
        <ul class="my-4 ml-8 text-gray-700 list-disc">
          <li>「ブランクがあるけど急にシフトに入るのは気が引ける」</li>
          <li>「他の施設も気になるけど派遣や紹介会社に登録するのは面倒」</li>
          <li>「本業があるので早朝や夜間だけ利用したい」</li>
          <li>「フリーランスとして働きたいけど自分で営業はできない」</li>
          <li>「施設の給料が安いけど、子ども達とは離れたくないので副業がしたい」</li>
        </ul>
        そんな方々にはピッタリです。
      </p>

      {{-- <h3 class="my-5 text-2xl font-bold text-gray-800">
        施設が導入するメリット
      </h3> --}}

      <section class="mt-10">
        <h3 class="mb-6 text-2xl font-bold text-gray-800">施設が導入するメリット</h3>
        <ul class="pl-5 space-y-2 text-gray-700 list-disc">
          <li class="text-lg text-gray-700">「１人の常勤社員を雇用するほどでもない」</li>
          <li class="text-lg text-gray-700">「紹介会社の採用手数料の８０万近くが運営費響く」</li>
          <li class="text-lg text-gray-700">「早朝や日曜日にケアクルーが来てくれたら開所時間が増えてニーズが高まる」</li>
          <li class="text-lg text-gray-700">「必要な時間や短時間で頼めるから手数料が気にならない」</li>
          <li class="text-lg text-gray-700">「運営が安定するので子ども達や職員への還元ができる」</li>
        </ul>
        <p class="mt-4 text-lg">そんな施設の運営者にはピッタリです。</p>
    </section>
  </div>
</section>

{{-- <section class=" bg-green-50">
    <p class="p-5">
    <h2><strong class="ml-5">ケアクルーって？</strong><span>ご利用前にお読み下さい</span></h2>
    </p>
      <h3 class="p-5" style="font-size: 1.5rem;">子ども達の未来のために活躍できる人たちのことです</h3>
      <p class="m-5">保育士や幼稚園教諭、児童発達管理者、指導員など、子どもたちに関わる仕事をする方は、子ども達の未来を守る大切な方々です。<br>
      しかし、近年では不適切な保育のニュースが度々流れるなど、とても残念な情報で溢れかえっています。
      <br>そこで弊社では国の古い研修動画に依存しない、最新の子ども達の成長に関する動画やテキストを用意し、それらの研修をクリアすることで業務の質を確保し、高単価を得られる人材を <strong style="font-size: 1.5rem;">「ケアクルー」</strong>と名付けました。</p>
      <p class="m-5">また、ケアクルーは副業にも最適で、自身が常勤で勤める施設以外に、シフトに合わせて勉強や横の繋がりを増やすための短時間利用が可能です。
      </p>

      <h3  class="m-5" style="font-size: 1.5rem;">資格や経験があれば誰でも「ケアクルー」になれる</h3>

      <p class="m-5">「ほいみん」では以下の内容のようなケアクルー登録者が多数おります。

        <ul class="m-5">
          <li>「ブランクがあるけど急にシフトに入るのは気が引ける」</li>
          <li>「他の施設も気になるけど派遣や紹介会社に登録するのは面倒」</li>
          <li>「本業があるので早朝や夜間だけ利用したい」</li>
          <li>「フリーランスとして働きたいけど自分で営業はできない」</li>
          <li>「施設の給料が安いけど、子ども達とは離れたくないので副業がしたい」</li>

          <br>
        そんな方々にはピッタリです。
        </ul>
      </p>

      <h3 class="m-5" style="font-size: 1.5rem;">施設が導入するメリット</h3>
        <ul>
          <li>「１人の常勤社員を雇用するほどでもない」</li>
          <li>「紹介会社の採用手数料の８０万近くが運営費響く」</li>
          <li>「早朝や日曜日にケアクルーが来てくれたら開所時間が増えてニーズが高まる」</li>
          <li>「必要な時間や短時間で頼めるから手数料が気にならない」</li>
          <li>「運営が安定するので子ども達や職員への還元ができる」</li>
          <br>そんな施設の運営者にはピッタリです。
        </ul>
    </section> --}}

    {{-- <section class="bg1">

        <h2  class="m-5" style="font-size: 2rem;">PICKUP<span>注目の施設</span></h2>

        <div class="c2 blur">

        <div class="text l">
        <h2>ベビースター幼稚園<span>佐々木　俊輔　園長</span></h2>
        <p>私が開園した10年前は待機児童も多く、たくさんの職員で溢れておりました。そこには笑顔の絶えない園内で、多くの子ども達が卒園していきました。しかし、職員の結婚や出産、ご家庭の事情による転勤など、採用は常につきものでした。<br>
        そんな中、派遣会社や紹介会社ができ、当初は迅速に人手不足を解消するために仕方がないという気持ちでいましたし、社員1名につき紹介料は20万円程度だったので受け入れていました。しかし、年々手数料が増え、今では80万ちかくになります。<br>
        そんな中、「ほいみん」と出会ったおかげで手数料を抑えることができ、さらには必要な時間のみで良いので運営が安定し、それを子ども達や職員に還元することができています。
        </p>
        <p class="c"><a href="#" class="block btn1">求人情報はこちら<i class="fas fa-arrow-circle-right"></i></a></p>
        <p class="c"><a href="#" class="block btn2">施設ホームページ<i class="fas fa-arrow-circle-right"></i></a></p>
        </div>
        <!--/.text-->

        <div class="image r">
        <figure><img src="images/sample3.jpg" alt=""></figure>
        </div>
        <!--/.image-->

        </div>

        </section>

        <section>

          <h2>PICKUP<span>注目の施設</span></h2>

        <div class="c2 blur">

        <div class="text r">
        <h2>オーザック保育園<span>猿渡　武彦　施設長</span></h2>
        <p>私の保育園では現在、200名以上のお子さんが在籍しており、職員は80名を超えます。たくさんの子ども達と触れ合い、毎日元気をもらっています。しかし、なかなか人手不足なのも現状で、保護者の方が早朝や夜間働いている場合や、日曜日にも働く保護者の方のニーズに応えることが現状は出来ていませんでした。<br>しかし、ほいみんを利用することで保護者の方からも通常よりも開園している時間が長いため、とても喜びの声をいただいています。また、ケアクルーの方の業務の質も良く、安心して受け入れることができています。</p>
        <p class="c"><a href="#" class="block btn1">求人情報はこちら<i class="fas fa-arrow-circle-right"></i></a></p>
        <p class="c"><a href="#" class="block btn2">施設ホームページ<i class="fas fa-arrow-circle-right"></i></a></p>
        </div>
        <!--/.text-->

        <div class="image l">
        <figure><img src="images/sample3.jpg" alt=""></figure>
        </div>
        <!--/.image-->

        </div>

        </section> --}}
        <script>
            document.addEventListener('DOMContentLoaded', () => {
              const section = document.querySelector('section.bg-green-100');

              section.addEventListener('mouseenter', () => {
                section.classList.replace('bg-green-100', 'bg-green-200');
              });

              section.addEventListener('mouseleave', () => {
                section.classList.replace('bg-green-200', 'bg-green-100');
              });
            });
          </script>


</x-guest-layout>
