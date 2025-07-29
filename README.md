# LaraWeb - Laravel Tabanlı İçerik Yönetim Sistemi

## 📋 Proje Hakkında

LaraWeb, Laravel framework'ü kullanılarak geliştirilmiş modern bir içerik yönetim sistemidir. Bu proje, makaleler, kategoriler, görseller ve videolar gibi çeşitli içerik türlerini yönetmek için tasarlanmıştır. Jetstream ve Fortify entegrasyonu ile güçlü kullanıcı yönetimi ve takım çalışması özellikleri sunar.

## ✨ Özellikler

### 🔐 Kimlik Doğrulama ve Yetkilendirme
- **Laravel Fortify** ile güvenli kullanıcı kimlik doğrulama
- **Laravel Jetstream** ile gelişmiş kullanıcı yönetimi
- Takım tabanlı çalışma sistemi
- Takım davet sistemi
- Rol tabanlı yetkilendirme (Spatie Permission paketi)
- İki faktörlü kimlik doğrulama desteği

### 📝 İçerik Yönetimi
- **Makale Yönetimi**: Kapsamlı makale oluşturma ve düzenleme
- **Kategori Sistemi**: Hiyerarşik kategori yapısı
- **Medya Yönetimi**: Görsel ve video yükleme/düzenleme
- **İlişkisel Veri Yapısı**: Makale-Kategori, Makale-Görsel, Makale-Video ilişkileri

### 🎨 Kullanıcı Arayüzü
- **Livewire** ile dinamik kullanıcı arayüzü
- **Tailwind CSS** ile modern ve responsive tasarım
- **Alpine.js** ile interaktif bileşenler
- Temiz ve kullanıcı dostu arayüz

### 🛠️ Teknik Özellikler
- **Laravel 8+** uyumluluğu
- **PHP 8.0+** desteği
- **MySQL/PostgreSQL** veritabanı desteği
- **Redis** cache desteği
- **Queue** sistemi
- **API** token yönetimi

## 🚀 Kurulum

### Gereksinimler
- PHP 8.0 veya üzeri
- Composer
- Node.js ve NPM
- MySQL/PostgreSQL
- Redis (opsiyonel)

### Adım 1: Projeyi İndirin
```bash
git clone https://github.com/kullaniciadi/laraweb.git
cd laraweb
```

### Adım 2: Bağımlılıkları Yükleyin
```bash
# PHP bağımlılıkları
composer install

# Node.js bağımlılıkları
npm install
```

### Adım 3: Ortam Değişkenlerini Ayarlayın
```bash
cp .env.example .env
php artisan key:generate
```

`.env` dosyasını düzenleyerek veritabanı bağlantı bilgilerinizi girin:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laraweb
DB_USERNAME=root
DB_PASSWORD=
```

### Adım 4: Veritabanını Hazırlayın
```bash
# Migration'ları çalıştırın
php artisan migrate

# Seed verilerini yükleyin
php artisan db:seed
```

### Adım 5: Frontend Varlıklarını Derleyin
```bash
# Geliştirme için
npm run dev

# Prodüksiyon için
npm run build
```

### Adım 6: Uygulamayı Başlatın
```bash
php artisan serve
```

Uygulama `http://localhost:8000` adresinde çalışmaya başlayacaktır.

## 📁 Proje Yapısı

```
laraweb/
├── app/
│   ├── Actions/           # Jetstream ve Fortify action'ları
│   ├── Classes/           # Özel sınıflar
│   ├── Http/
│   │   ├── Controllers/   # MVC Controller'ları
│   │   ├── Livewire/      # Livewire bileşenleri
│   │   └── Middleware/    # Özel middleware'ler
│   ├── Models/            # Eloquent modelleri
│   ├── Policies/          # Yetkilendirme politikaları
│   └── Providers/         # Service provider'ları
├── config/                # Konfigürasyon dosyaları
├── database/
│   ├── factories/         # Model factory'leri
│   ├── migrations/        # Veritabanı migration'ları
│   └── seeders/           # Veritabanı seed'leri
├── public/                # Genel erişim dosyaları
├── resources/
│   ├── views/             # Blade template'leri
│   └── markdown/          # Markdown dosyaları
└── tests/                 # Test dosyaları
```

## 🗄️ Veritabanı Yapısı

### Ana Tablolar
- **users**: Kullanıcı bilgileri
- **teams**: Takım bilgileri
- **articles**: Makale içerikleri
- **categories**: Kategori bilgileri
- **images**: Görsel dosyaları
- **videos**: Video dosyaları

### İlişki Tabloları
- **article_category**: Makale-Kategori ilişkisi
- **article_image**: Makale-Görsel ilişkisi
- **article_video**: Makale-Video ilişkisi
- **image_category**: Görsel-Kategori ilişkisi
- **video_category**: Video-Kategori ilişkisi

## 🎯 Kullanım

### Kullanıcı Yönetimi
1. Kayıt olun veya giriş yapın
2. Profil bilgilerinizi güncelleyin
3. Takım oluşturun veya mevcut takımlara katılın

### İçerik Yönetimi
1. **Makale Oluşturma**: Dashboard'dan yeni makale ekleyin
2. **Kategori Yönetimi**: İçerikleri kategorilere ayırın
3. **Medya Yükleme**: Görsel ve video dosyalarını yükleyin
4. **İlişkilendirme**: İçerikleri kategoriler ve medya ile ilişkilendirin

### Takım Çalışması
1. Takım oluşturun
2. Üyeleri davet edin
3. Rol atamaları yapın
4. Ortak projeler üzerinde çalışın

## 🔧 Konfigürasyon

### Jetstream Ayarları
`config/jetstream.php` dosyasında takım özelliklerini yapılandırabilirsiniz:
```php
'features' => [
    Features::teams(['invitations' => true]),
    Features::accountDeletion(),
],
```

### Fortify Ayarları
`config/fortify.php` dosyasında kimlik doğrulama ayarlarını yapılandırabilirsiniz.

### Livewire Ayarları
`config/livewire.php` dosyasında Livewire bileşenlerinin davranışlarını ayarlayabilirsiniz.

## 🧪 Test

```bash
# Tüm testleri çalıştırın
php artisan test

# Belirli bir test dosyasını çalıştırın
php artisan test tests/Feature/AuthenticationTest.php
```

## 📦 Kullanılan Paketler

### Backend
- **Laravel Framework**: Ana web framework'ü
- **Laravel Jetstream**: Kullanıcı yönetimi
- **Laravel Fortify**: Kimlik doğrulama
- **Laravel Livewire**: Dinamik UI bileşenleri
- **Spatie Permission**: Rol ve izin yönetimi

### Frontend
- **Tailwind CSS**: Utility-first CSS framework
- **Alpine.js**: Minimal JavaScript framework
- **Nunito Font**: Google Fonts

## 🤝 Katkıda Bulunma

1. Bu repository'yi fork edin
2. Yeni bir branch oluşturun (`git checkout -b feature/yeni-ozellik`)
3. Değişikliklerinizi commit edin (`git commit -am 'Yeni özellik eklendi'`)
4. Branch'inizi push edin (`git push origin feature/yeni-ozellik`)
5. Pull Request oluşturun

## 📄 Lisans

Bu proje MIT lisansı altında lisanslanmıştır. Detaylar için `LICENSE` dosyasına bakın.

## 🆘 Destek

Herhangi bir sorun yaşarsanız:
1. [Issues](https://github.com/kullaniciadi/laraweb/issues) bölümünde arama yapın
2. Yeni bir issue oluşturun
3. Detaylı hata açıklaması ve adımları ekleyin

## 👨‍💻 Geliştirici

Bu proje [Adınız](https://github.com/kullaniciadi) tarafından geliştirilmiştir.

## 🔄 Güncellemeler

### v1.0.0
- İlk sürüm yayınlandı
- Temel içerik yönetimi özellikleri
- Jetstream ve Fortify entegrasyonu
- Livewire bileşenleri

---

⭐ Bu projeyi beğendiyseniz yıldız vermeyi unutmayın! 