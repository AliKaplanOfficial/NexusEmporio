# NexusEmporio 2.0

## Projenin Amacı
**NexusEmporio 2.0**, dijital ürünlerin yönetimini ve satışını kolaylaştırmak için geliştirilmiş bir web uygulamasıdır. Bu proje, küçük ve orta ölçekli işletmelerin dijital ürünlerini depolaması, yönetmesi ve müşterilerine sunması için gerekli altyapıyı sağlamaktadır. Aynı zamanda, modern bir admin paneli ve esnek bir altyapı sunarak geliştirilmeye açık bir platform oluşturur.

## Kullanılan Teknolojiler

### Backend:
- **PHP** (CodeIgniter Framework)
- **Node.js**: İletişim formu için MongoDB entegrasyonu.
- **Composer**: PHP bağımlılık yönetimi.

### Frontend:
- **HTML**: Sayfa yapılarını oluşturmak için.
- **CSS**: Tasarım ve stil için.
- **JavaScript**: Dinamik işlevler ve kullanıcı etkileşimleri için.

### Veritabanı:
- **MySQL**: Ürün ve kullanıcı bilgileri için.
- **MongoDB**: İletişim formu verilerinin depolanması için.

## Yapılan İşlemler
- **Admin Paneli**: Ürün ekleme, düzenleme ve silme işlemleri.
- **Kullanıcı Yönetimi**: Kısa kayıt ve giriş sistemleri.
- **Dijital Ürün Yönetimi**: Ürünlerin yüklenmesi ve güvenli saklanması.
- **İletişim Formu**: Kullanıcı mesajlarını MongoDB üzerinde depolama.
- **Veritabanı İşlemleri**: MySQL ve MongoDB entegrasyonuyla veri yönetimi.
- **Geliştirilebilirlik**: MVC yapısı sayesinde kolayca yeni özellikler eklenebilir.

## Kurulum Adımları

### Gereksinimler:
- **PHP** (7.4 veya üzeri)
- **Composer**
- **Node.js**
- **MySQL** ve **MongoDB** sunucuları
- **Apache** veya benzeri bir web sunucusu

### Kurulum:

1. **Projeyi Klonlayın:**
   ```bash
   git clone <repository_url>
   ```
   
2. **PHP Bağımlılıklarını Yükleyin:**
   ```bash
   composer install
   ```

3. **Node.js Modüllerini Yükleyin:**
   ```bash
   cd node
   npm install
   ```

4. **MySQL Veritabanını Kurun:**
   - `dijitalurun.sql` dosyasını MySQL sunucunuza içe aktarın.
   - Veritabanı ayarlarını `application/config/database.php` dosyasında düzenleyin.

5. **MongoDB Bağlantısını Yapılandırın:**
   - `node/config` dizinindeki MongoDB URI ayarlarını yapılandırın.

6. **Web Sunucusunu Ayarlayın:**
   - Uygulamaya erişim için Apache veya Nginx kullanın.
   - `.htaccess` dosyasını kontrol ederek URL dostu yapının aktif olduğundan emin olun.

7. **Uygulamayı Başlatın:**
   - PHP için: `http://localhost/NexusEmporio2.0`
   - Node.js iletişim servisi için: `node/server.js` dosyasını çalıştırın.

## Dosya Yapısı
- `admin-panel/`: Admin paneline ait dosyalar.
- `application/`: Uygulamanın temel PHP kodları ve MVC yapısı.
- `dijitalurun.sql`: MySQL veritabanı şemaları ve örnek veriler.
- `node/`: Node.js tabanlı iletişim formu servisi.
- `uploads/`: Kullanıcı yüklemeleri.

## Geliştirici Notları
- Projede herhangi bir sorun veya hata bildirimi için `Issues` sekmesini kullanabilirsiniz.
- Yeni özellikler eklemek için projeyi `fork` yapabilir ve değişikliklerinizi bir `pull request` ile gönderebilirsiniz.

---

Bu proje, dijital ürün yönetimi ve satışını modern bir altyapıyla destekleyen kullanışllı bir çözüm sunar. Geri bildirimleriniz bizim için çok önemlidir! Teşekkürler. ✨

