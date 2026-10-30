import java.util.Scanner;
public class App {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in, "UTF-8");
        Boolean f = true;
        while (f)
        {
            System.out.println("DANH SÁCH CÁC BÀI TẬP");
            System.out.println("1. Xin chào Java");
            System.out.println("2. Mộ số thông tin các nhân");
            System.out.println("3. Các phép toán cơ bản");
            System.out.println("4. Hình Chữ nhật");
            System.out.println("5. Hình tròn");
            System.out.println("6. Chuyển đổi nhiệt độ");
            System.out.println("7. Đổi giờ");
            System.out.println("8. Thoát");

            System.out.print("Nhập lựa chọn của bạn: ");
            int opt = sc.nextInt();

            if (opt < 1 || opt > 8)
            {
                System.out.println("Bạn nhập sai! Vui lòng nhập lại!");
                continue;
            }

            switch (opt)
            {
                case 1 -> {
                    Bai1 b1 = new Bai1();
                    b1.main();
                }

                case 8 -> f = false;
            }


        }
    }
}
