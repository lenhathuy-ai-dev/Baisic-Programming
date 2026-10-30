import java.util.Scanner;
public class Bai8_TinhTien {
    public void main()
    {
        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập trên sản phẩm: ");
        String tenSP = sc.next();
        System.out.print("Nhập số lượng: ");
        int soLuong = sc.nextInt();
        System.out.print("Nhập đơn giá: ");
        float donGia = sc.nextFloat();
        System.out.print("Nhập phần trăm giảm giá: ");
        float giamGia = sc.nextFloat();

        float thanhTien = soLuong*donGia*giamGia;

        System.out.printf("Tổng tiền phải trả cho sản phẩm %s là %.2f",tenSP, thanhTien);
        

    }
}
