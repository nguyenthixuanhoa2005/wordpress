# 📘 Student Manager - WordPress Plugin
## Giao diện
![Danhsachsinhvien](https://github.com/user-attachments/assets/5c8021c1-7e1c-4ad1-996a-46dcff25eade)

## 📌 Giới thiệu
**Student Manager** là một plugin WordPress mạnh mẽ và nhẹ nhàng giúp quản lý danh sách sinh viên một cách chuyên nghiệp. Plugin này cho phép bạn lưu trữ, quản lý thông tin chi tiết và hiển thị danh sách sinh viên ra ngoài giao diện web thông qua các Shortcode linh hoạt.

---

## ⚙️ Tính năng chính

### 🔧 Backend (Quản trị viên)
1. **Custom Post Type (CPT):**
   - Tự động tạo menu **Sinh viên** chuyên biệt trong trang Admin.
   - Hỗ trợ đầy đủ: `Title` (Họ tên), `Editor` (Tiểu sử/Ghi chú).

2. **Custom Meta Boxes:**
   Giao diện nhập liệu trực quan với các trường dữ liệu tùy chỉnh:
   | Trường dữ liệu | Kiểu dữ liệu | Mô tả |
   | :--- | :--- | :--- |
   | **MSSV** | `Text` | Mã số sinh viên duy nhất |
   | **Lớp/Ngành** | `Dropdown` | CNTT, Kinh tế, Marketing... |
   | **Ngày sinh** | `Date Picker` | Chọn ngày sinh từ lịch |
   | **Ảnh đại diện** | `Media Upload` | Tải ảnh trực tiếp lên WordPress Media |

3. **Bảo mật & Xử lý dữ liệu:**
   - Sử dụng **Nonce** để chống các cuộc tấn công CSRF.
   - Làm sạch dữ liệu đầu vào bằng `sanitize_text_field()`.
   - Bảo vệ đầu ra với `esc_attr()` và `esc_html()`.

### 🌐 Frontend (Giao diện người dùng)
- **Shortcode mạnh mẽ:** Chỉ cần chèn `[danh_sach_sinh_vien]` vào bất kỳ trang hoặc bài viết nào.
- **Giao diện bảng hiện đại:** Tự động hiển thị danh sách gồm: *STT, MSSV, Họ tên, Lớp, Ngày sinh và Ảnh đại diện.*

---

## 📂 Cấu trúc thư mục
Cấu trúc chuẩn giúp dễ dàng bảo trì và mở rộng:

```text
wp-content/plugins/student-manager/
├── assets/                 # Chứa tài liệu tĩnh
│   ├── css/                # Style cho bảng sinh viên
│   └─
├── includes/               # Chứa các file xử lý logic tách biệt
├── student-manager.php     # File chính (Plugin Header)
└── README.md               # Hướng dẫn sử dụng
![Danh sách sinh viên](images/Danhsachsinhvien.jpg)
