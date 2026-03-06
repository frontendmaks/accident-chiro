# Oregon Accident Chiro — WordPress Theme
## Покрокова інструкція встановлення

---

## КРОК 1: Купити хостинг (10 хв)

1. Йди на **hostinger.com**
2. Обери план **Premium Web Hosting** (~$3-4/міс при оплаті на рік)
3. При реєстрації введи домен: `oregonaccidentchiro.com` (або інший)
4. Оплати — домен іде безкоштовно на перший рік

---

## КРОК 2: Встановити WordPress (5 хв)

1. Зайди в Hostinger **hPanel**
2. Знайди розділ **WordPress** → **Auto Installer**
3. Заповни:
   - Site Name: `Oregon Accident Chiro`
   - Admin Username: (твій логін)
   - Admin Password: (надійний пароль — запиши!)
   - Admin Email: (твій email)
4. Натисни **Install**
5. WordPress встановлено ✅

---

## КРОК 3: Встановити тему (3 хв)

1. Зайди в WordPress Admin: `yourdomain.com/wp-admin`
2. Меню: **Appearance → Themes → Add New**
3. Натисни **Upload Theme**
4. Завантаж файл: `oregon-accident-chiro-theme.zip` (цей архів)
5. Натисни **Install Now** → **Activate**
6. Тема активована ✅

---

## КРОК 4: Налаштувати тему (2 хв)

1. В адмінці знайди меню **⚙️ OAC Settings** (зліва)
2. Заповни:
   - **Display Phone**: твій справжній номер, напр. `(503) 666-7890`
   - **Phone (tel: link)**: `+15036667890` (без дужок і пробілів)
   - **CallRail Number**: якщо використовуєш CallRail, вкажи тут
   - **Email**: твій email
3. Натисни **Save Settings**
4. Номер телефону автоматично оновиться на ВСІХ сторінках ✅

---

## КРОК 5: Імпортувати контент (5 хв)

1. Меню: **Tools → Import**
2. Знайди **WordPress** і натисни **Install Now** → **Run Importer**
3. Завантаж файл: `content-import.xml` (з папки `inc/` в архіві)
4. Натисни **Upload file and import**
5. Погодься призначити автора → **Submit**
6. Імпортовано:
   - ✅ 6 сторінок послуг (Services)
   - ✅ 3 сторінки міст (Portland, Hillsboro, Salem)
   - ✅ 3 блог-пости

---

## КРОК 6: Налаштувати головну сторінку (2 хв)

1. Меню: **Settings → Reading**
2. Обери: **A static page**
3. **Front page**: створи нову сторінку з назвою "Home" (Pages → Add New → назва "Home" → Publish)
4. Повернись в Settings → Reading → встанови "Home" як Front page
5. Натисни **Save Changes**

---

## КРОК 7: Встановити плагіни (10 хв)

Іди в **Plugins → Add New** і встанови:

| Плагін | Для чого |
|--------|----------|
| **Yoast SEO** або **RankMath SEO** | SEO мета-теги, sitemap |
| **WP Super Cache** або **W3 Total Cache** | Швидкість сайту |
| **UpdraftPlus** | Автоматичні бекапи |
| **Wordfence Security** | Безпека |

---

## КРОК 8: Додати нові міста (будь-коли)

1. Меню: **City Pages → Add New**
2. Заповни:
   - **Title**: назва міста, напр. "Beaverton"
   - **Content**: опис послуг у цьому місті
   - **Excerpt**: короткий опис (показується на головній)
3. Custom Fields (знизу сторінки):
   - `_oac_county` = "Washington County"
   - `_oac_roads` = "Hwy 26, TV Hwy, and Cedar Hills Blvd"
   - `_oac_neighborhoods` = "Beaverton, Aloha, Cedar Hills, Bethany"
4. Натисни **Publish** — місто одразу з'явиться в меню і на головній!

---

## КРОК 9: Додати нові послуги (будь-коли)

1. Меню: **Services → Add New**
2. Заповни title, content, excerpt
3. Custom Fields:
   - `_oac_icon` = емодзі, напр. `💊`
4. Publish ✅

---

## КРОК 10: Писати блог-пости (будь-коли)

1. Меню: **Posts → Add New**
2. Пиши і публікуй — пости автоматично з'являються:
   - На головній (останні 3)
   - В архіві `/blog`
   - В сайдбарі пов'язаних статей

---

## Структура файлів теми

```
oregon-accident-chiro/
├── style.css              ← Ідентифікатор теми (не чіпати)
├── functions.php          ← Логіка теми, налаштування, AJAX
├── header.php             ← Шапка і навігація
├── footer.php             ← Підвал і sticky bar
├── front-page.php         ← Головна сторінка
├── index.php              ← Блог (архів постів)
├── single.php             ← Окремий блог-пост
├── single-oac_city.php    ← Сторінка міста
├── single-oac_service.php ← Сторінка послуги
├── template-parts/
│   └── form.php           ← Форма (використовується скрізь)
├── assets/
│   ├── css/main.css       ← Всі стилі
│   └── js/main.js         ← JavaScript (форма, FAQ, анімації)
└── inc/
    └── content-import.xml ← XML для імпорту контенту
```

---

## Часті питання

**Q: Як змінити телефон на всьому сайті одразу?**
A: ⚙️ OAC Settings → змінюєш один раз → зберігаєш. Готово.

**Q: Як підключити CallRail?**
A: ⚙️ OAC Settings → поле "CallRail Number" → вводиш трекінговий номер.
Він замінить основний номер на всьому сайті автоматично.

**Q: Як додати місто Beaverton?**
A: City Pages → Add New → заповнюєш поля → Publish.
Бeaverton автоматично з'явиться в дропдаун меню і на головній.

**Q: Форма не відправляється?**
A: Перевір Settings → General → Email Address — туди приходять ліди.
Також встанови плагін "WP Mail SMTP" для надійної відправки email.

---

## Підтримка

Виникли питання по встановленню? Тема створена під твій rank & rent проект.
Всі основні функції налаштовуються через ⚙️ OAC Settings в адмінці WordPress.
