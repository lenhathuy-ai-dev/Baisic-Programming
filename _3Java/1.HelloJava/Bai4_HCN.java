import java.util.Scanner;
public class Bai4_HCN{
    public void main() {
        Scanner sc = new Scanner (System.in);
        System.out.print("Nhập chiều dài: ");
        int a = sc.nextInt();
        System.out.print("Nhập chiều rộng: ");
        int b = sc.nextInt();

        System.out.printf("Chu vi: %d\n", 2*(a+b));
        System.out.printf("Diện tích: %d\n", a*b);

    }
}