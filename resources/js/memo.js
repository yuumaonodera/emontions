import { Calendar } from "@fullcalendar/core";
import dayGridPlugin from "@fullcalendar/daygrid";
import axios from 'axios';


calendarEl = document.getElementById("calendar");

let calendar = new Calendar(calendarEl, {
  plugins: [dayGridPlugin],
  initialView: "dayGridMonth", 
  headerToolbar: {
    left: "prev,next today",
    center: "title",
    right: "dayGridMonth,timeGridWeek,listWeek",
  },
  locale: "ja",

  // 日付をクリック、または範囲を選択したイベント
  selectable: true,
  select: function (info) {
    //alert("selected " + info.startStr + " to " + info.endStr);

    // 入力ダイアログ
    const eventName = prompt("イベントを入力してください");

    if (eventName) {
      // Laravelの登録処理の呼び出し
      axios
        .post("/schedule-add", {
          start_date: info.start.valueOf(),
          end_date: info.end.valueOf(),
          event_name: eventName,
        })
        .then(() => {
          // イベントの追加
          calendar.addEvent({
            title: eventName,
            start: info.start,
            end: info.end,
            allDay: true,
          });
        })
        .catch((e) => {
          // バリデーションエラーなど
          alert("登録に失敗しました");
          throw e
        });
    }
  },
    events: function (info, successCallback, failureCallback) {
      // Laravelのイベント取得処理の呼び出し
      axios
        .post("/schedule-get", {
          start_date: info.start.valueOf(),
          end_date: info.end.valueOf(),
        })
        .then((response) => {
          // 追加したイベントを削除
          calendar.removeAllEvents();
          // カレンダーに読み込み
          successCallback(response.data);
        })
        .catch((e) => {
          // バリデーションエラーなど
          alert("登録に失敗しました");
          throw e
        });
    },
});
calendar.render();

//var calendarEl = document.getElementById("calendar");

let Calendar = new Calendar(calendarEl, {
  plugins: [dayGridPlugin],
  initialView: "dayGridMonth",
  headerToolbar: {
    left: "prev,next today",
    center: "title",
    right: "",
  },
});
calendar.render();
