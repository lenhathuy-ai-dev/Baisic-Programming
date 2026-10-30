import java.util.Scanner;

public class Bai6_ChuyenNhietDo {
    public void main()
    {
        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập nhiệt độ độ C: ");
        float temp = sc.nextFloat();

        System.out.printf("Nhiệt độ Fahenheit %.3f\n", temp*1.8+32);

    }
}
